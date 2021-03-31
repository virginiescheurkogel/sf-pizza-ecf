<?php

namespace App\DataFixtures;

use App\Entity\Base;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BaseFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // création base tomate
        $base = new Base();
        $base->setBaseName("Tomate")
             ->setBasePrice("5");
        $manager->persist($base);


        // création base crème
        $base = new Base();
        $base->setBaseName("Crème")
            ->setBasePrice("7");
        $manager->persist($base);


        $manager->flush();
    }
}
