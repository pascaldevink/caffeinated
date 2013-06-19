<?php

namespace RustigWerken\ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use RustigWerken\EntitiesBundle\Entity\Location;

class LocationController extends FOSRestController
{
    public function getLocationsAction()
    {
        $data = array();

        $location = new Location();
        $location->setId(1337);
        $location->setName('Starbucks Doubletree by Hilton');
        $location->setLatitude(52.37698);
        $location->setLongitude(4.904151);
        $data[] = $location;

        $location = new Location();
        $location->setId(1337);
        $location->setName('Starbucks The Bank');
        $location->setLatitude(52.365896);
        $location->setLongitude(4.897711);
        $data[] = $location;

        $location = new Location();
        $location->setId(1337);
        $location->setName('Coffee Company Meester Treublaan');
        $location->setLatitude(52.347272);
        $location->setLongitude(4.914166);
        $data[] = $location;

        $view = View::create($data);

        return $this->handleView($view);
    }
}