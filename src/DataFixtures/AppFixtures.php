<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $suiteclassiquegerant = new SuiteClassiqueGerant();
        $suiteclassiquegerant->setName('Suite classique')
                              ->setPrice(2000);

        $suitepanoramiquegerant = new SuitepanoramiqueGerant();
        $suitepanoramiquegerant->setName('Suite panoramique')
                               ->setPrice(2500);
        $suitepresidentiellegerant = new SuitePresidentielleGerant();
        $suitepresidentiellegerant->setName('Suite présidentielle')
                                  ->setPrice(5000);

        $manager->persist($suiteclassiquegerant);
        $manager->persist($suitepanoramiquegerant);
        $manager->persist($suitepresidentiellegerant);
        $manager->flush();
    }
}
