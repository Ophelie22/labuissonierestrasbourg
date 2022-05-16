<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\User;
use Faker\Factory;
use Faker\Generator;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{  
    /**
     * @var Generator
     */
    private Generator $faker;

    public function __construct()
    {
        $this->faker = Factory::create('fr_FR');
    }

    public function load(ObjectManager $manager): void
    {

        //Utilisateur
        for ($i = 0; $i < 10; $i++) {
            $user = new User();
            $user->setFullName($this->faker->name())
                ->setPseudo(mt_rand(0, 1) === 1 ? $this->faker->firstName() : null)
                ->setEmail($this->faker->email())
                ->setRoles(['ROLE_USER'])
                ->setPlainPassword('password');

            $users[] = $user;
            $manager->persist($user);
        }



        //category
        $categories = [];
        for ($i = 0; $i < 50; $i++) {
            $category = new Category();
            $category->setName($this->faker->word());
            //->setUser($users[mt_rand(0, count($users) - 1)]);

            $categories[] = $category;
            $manager->persist($category);

        $manager->flush();
        }
    }
}