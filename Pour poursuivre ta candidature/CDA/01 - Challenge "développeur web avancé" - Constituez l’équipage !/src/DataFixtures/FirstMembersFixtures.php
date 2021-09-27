<?php

namespace App\DataFixtures;

use App\Entity\Argonaut;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class FirstMembersFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $Eleftheria = new Argonaut();
        $Eleftheria->setName('Eleftheria');
        $manager->persist($Eleftheria);

        $Gennadios = new Argonaut();
        $Gennadios->setName('Gennadios');
        $manager->persist($Gennadios);

        $Lysimachos = new Argonaut();
        $Lysimachos->setName('Lysimachos');
        $manager->persist($Lysimachos);

        $manager->flush();
    }
}
