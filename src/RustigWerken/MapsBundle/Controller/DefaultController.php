<?php

namespace RustigWerken\MapsBundle\Controller;

use Ivory\GoogleMap\Overlays\Animation;
use Ivory\GoogleMap\Overlays\Marker;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        $map = $this->getMap();

        $marker = new Marker();
        $marker->setPosition(52, 5, true);
        $marker->setAnimation(Animation::DROP);

        $map->addMarker($marker);

        return array(
            'map' => $map,
        );
    }

    /**
     * @return \Ivory\GoogleMap\Map
     */
    protected function getMap()
    {
        return $this->get('ivory_google_map.map');
    }
}
