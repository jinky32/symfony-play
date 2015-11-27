<?php

namespace Yoda\EventBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Yoda\EventBundle\Entity\Event;

class LoadEvents implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $event1 = new Event();
        $event1->setName('My first event');
        $event1->setLocation('Waddesdon');
        //$event1->setTime(new \DateTime('tomorrownoon'));
        $event1->setTime(new \DateTime('tomorrow noon'));
        $event1->setDetails('He will love this!');
        $manager->persist($event1);

        $event2 = new Event();
        $event2->setName('My Second event');
        $event2->setLocation('Quatin');
       // $event2->setTime(new \DateTime('tomorrowlunchtime'));
        $event2->setTime(new \DateTime('tomorrow noon'));
        $event2->setDetails('He will hate this!');
        $manager->persist($event2);

        $manager->flush();
    }
}