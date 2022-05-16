<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Category;
use App\Entity\Article;
use Faker\Factory;
use Faker\Generator;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
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
                ->setIsFavorite(1 == mt_rand(0, 1) ? true : false);
                //->setUser($users[mt_rand(0, count($users) - 1)]);
            
            for ($k = 0; $k < mt_rand(5, 15); $k++) {
                $article->addCategory($categories[mt_rand(0, count($categories) - 1)]);
            }


            $articles[] = $article;
            $manager->persist($article);
        }
        $manager->flush();
    }
}