<?php

namespace RustigWerken\ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use RustigWerken\EntitiesBundle\Entity\Location;
use RustigWerken\EntitiesBundle\Entity\LocationRepository;
use Symfony\Component\HttpFoundation\Request;

class LocationController extends FOSRestController
{
    public function getLocationsAction(Request $request)
    {
        $filterWiredInternet = $request->get('wired-internet', null);
        if ($filterWiredInternet === null || $filterWiredInternet == false)
        {
            // Nothing yet
        }

        /** @var LocationRepository $locationRepository */
        $locationRepository = $this->getDoctrine()->getRepository('RustigWerken\EntitiesBundle\Entity\Location');
        $locations = $locationRepository->findAll();

        $view = View::create($locations);

        return $this->handleView($view);
    }
}