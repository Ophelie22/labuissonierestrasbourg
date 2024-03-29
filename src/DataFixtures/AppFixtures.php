<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Mark;
use App\Entity\User;
use Faker\Generator;
use App\Entity\Article;
use App\Entity\Contact;
use App\Entity\Category;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{   /**
     * @var Generator
     */
    private Generator $faker;

    public function __construct()
    {
        $this->faker = Factory::create('fr_FR');
    }

    public function load(ObjectManager $manager): void
    {
        // Utilisateur
        $users = [];

        $admin = new User();
        $admin->setFullName('Administrateur de SymRecipe')
            ->setPseudo(null)
            ->SetEmail('contactjuliettevila@gmail.com')
            ->setRoles(['ROLE_USER', 'ROLE_ADMIN'])
            ->setPlainPassword('password');

        $users[] = $admin;
        $manager->persist($admin);

        for ($i = 0; $i < 10; ++$i) {
            $user = new User();
            $user->setFullName($this->faker->name())
                ->setPseudo(1 === mt_rand(0, 1) ? $this->faker->firstName() : null)
                ->setEmail($this->faker->email())
                ->setRoles(['ROLE_USER'])
                ->setPlainPassword('password');

            $users[] = $user;
            $manager->persist($user);
        }

        // category
        $categories = [];
        for ($i = 0; $i < 50; ++$i) {
            $category = new Category();
            $category->setName($this->faker->word())
                ->setUser($users[mt_rand(0, count($users) - 1)]);

            $categories[] = $category;
            $manager->persist($category);

            //$manager->flush();
        }
        // articles
        $articles = [];
        $article = new Article();
        for ($j = 0; $j < 25; ++$j) {
            $article = new Article();
            $article->setName($this->faker->word())
                ->setTitre($this->faker->word())
                ->setDescription($this->faker->text(300))
                ->setIsFavorite(1 == mt_rand(0, 1) ? true : false)
                ->setIsPublic(1 == mt_rand(0, 1) ? true : false)
                ->setUser($users[mt_rand(0, count($users) - 1)]);
            
            for ($k = 0; $k < mt_rand(5, 15); $k++) {
                $article->addCategory($categories[mt_rand(0, count($categories) - 1)]);
            }


            $articles[] = $article;
            $manager->persist($article);
        }
        // Marks (système de vote et note)
        foreach ($articles as $article) {
            for ($i = 0; $i < mt_rand(0, 4); $i++) {
                $mark = new Mark();
                $mark->setMark(mt_rand(1, 5))
                    ->setUser($users[mt_rand(0, count($users) - 1)])
                    ->setArticle($article);

                $manager->persist($mark);//On persiste la note
            }
        }
        // Contact
        for ($i = 0; $i < 5; $i++) {
            $contact = new Contact();
            $contact->setFullName($this->faker->name())
                ->setEmail($this->faker->email())
                ->setSubject('Demande n°' . ($i + 1))
                ->setMessage($this->faker->text());

            $manager->persist($contact);
        }

        $manager->flush();
    }
}