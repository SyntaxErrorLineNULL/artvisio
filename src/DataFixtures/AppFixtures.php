<?php

namespace App\DataFixtures;

use App\Entity\Books;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager) : void {

        $FakeData = Factory::create();
        for($data = 0; $data <= 20; $data++){
            $Book = new Books();
            $Book->setAuthor($FakeData->name);
            $Book->setTitle($FakeData->realText($FakeData->numberBetween(10,50)));
            $Book->setYear($FakeData->year);
            $manager->persist($Book);
        }
        $manager->flush();
    }
}
