<?php

namespace App\DataFixtures;

use Faker\Factory;
use Faker\Generator;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\SuiteClassiqueGerant;
use App\Entity\SuitePanoramiqueGerant;
use App\Entity\SuitePresidentielleGerant;


class AppFixtures extends Fixture
{
    /**
     * @var Gerenator
     */
    private Generator $faker;
    
    public function __construct()
    {
        $this->faker = Factory::create('fr-FR');
    }


    public function load(ObjectManager $manager): void
    {
        /**Boucle pour générer des suites sur ma bbd */
        for ($s =1; $s<=19; $s++){
        $suiteclassiquegerant = new SuiteClassiqueGerant();
        $suiteclassiquegerant->setName('Suite classique' . $s)
                             ->setPrice(2000)
                             ->setDescription($this->faker->word(10))
                             ->setImage('https://bit.ly/3x2kWO2');
        $manager->persist($suiteclassiquegerant);
        }

        for ($s =1; $s<=19; $s++){
        $suitepanoramiquegerant = new SuitepanoramiqueGerant();
        $suitepanoramiquegerant->setName('Suite panoramique')
                               ->setPrice(2500)
                               ->setDescription($this->faker->word(10))
                               ->setImage('https://bit.ly/36LYApt');
        $manager->persist($suitepanoramiquegerant);
        }

        for ($s =1; $s<=19; $s++){
        $suitepresidentiellegerant = new SuitePresidentielleGerant();
        $suitepresidentiellegerant->setName('Suite présidentielle')
                                  ->setPrice(5000)
                                  ->setDescription($this->faker->word(10))
                                  ->setImage('https://bit.ly/3iYKW4z');
        $manager->persist($suitepresidentiellegerant);
        }
        $manager->flush();
    }
}
