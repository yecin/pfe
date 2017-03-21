<?php
// src/BO/OccasionBundle/DataFixtures/ORM/LoadUser.php

namespace BO\OccasionBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BO\OccasionBundle\Entity\Advert;

class LoadAdvert implements FixtureInterface
{
  public function loadAd(ObjectManager $manager)
  {
    $min=date('1-12-2016');
    $max=date ('1-3-2017');
    // Les noms d'utilisateurs à créer
    for ($i = 1; $i <= 10; $i++) 
    {
        $advert= new Advert;
        $advert->setTitle("annonce".$i);
        $advert->setContent("description d annonce".$i);
        //$advert->setPrice(rand(5, 100));
        $advert->setPrice(30);
        $advert->setBrand("marque d annonce".$i);
        $advert->setState("etat d annonce".$i);
        //$advert->setCategory(rand(1, 10));
        $advert->setShowphone(rand(0, 1));
        $advert->setPublished(rand(0, 1));
        $advert->setShowphone(0);
        $advert->setPublished(1);
        //$advert->setCustomer(rand(1, 3));
        $advert->setCustomer(1);
        $min_epoch = strtotime($min);
        $max_epoch = strtotime($max);
        $rand_epoch = rand($min_epoch, $max_epoch);
        //$advert->setDatecreate("2017-02-28 00:07:41");
        $advert->setDatecreate(date('d-m-Y H:i:s', $rand_epoch));
        $manager->persist($advert);
   }


    // On déclenche l'enregistrement
    $manager->flush();
  }
}