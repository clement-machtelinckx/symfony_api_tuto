<?php

namespace App\DataFixtures;

use App\entity\User;
use App\Entity\DragonTreasure;
use App\Factory\DragonTreasureFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Factory\UserFactory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // Utiliser l'usine pour créer 10 instances de DragonTreasure
        DragonTreasureFactory::new()->createMany(40);
        UserFactory::createMany(10);
        // Enregistrer les données dans la base de données
        $manager->flush();
    }
}
