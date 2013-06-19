<?php

namespace RustigWerken\MapsBundle\Controller;

use Ivory\GoogleMap\Controls\ControlPosition;
use Ivory\GoogleMap\Controls\MapTypeControlStyle;
use Ivory\GoogleMap\Controls\ZoomControlStyle;
use Ivory\GoogleMap\MapTypeId;
use Ivory\GoogleMap\Overlays\Animation;
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
        $map->setJavascriptVariable('rwMap');
        $map->setMapOption('panControl', false);

        $map->setZoomControl(ControlPosition::RIGHT_CENTER, ZoomControlStyle::DEFAULT_);
        $map->setMapTypeControl(array(MapTypeId::HYBRID, MapTypeId::ROADMAP), ControlPosition::BOTTOM_LEFT, MapTypeControlStyle::DEFAULT_);

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
