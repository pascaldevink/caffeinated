<?php

namespace RustigWerken\ApiBundle\Tests\Controller;

use RustigWerken\ApiBundle\Controller\LocationController;
use Symfony\Component\HttpFoundation\Request;

class LocationControllerTest extends \PHPUnit_Framework_Testcase
{
    public function testGetLocationsAction()
    {
        $locationController = new LocationController();
        $locations = $locationController->getLocationsAction(new Request());

        $this->assertTrue(true);
    }
}