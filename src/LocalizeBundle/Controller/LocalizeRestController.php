<?php

namespace LocalizeBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;

class LocalizeRestController extends FOSRestController {
    public function optionsLocalizationsAction() {

    }

    public function getLocalizationsAction(Request $request) {

        $googlePlaces = $this->container->get('google.places');

        $position = $request->query->get('pos');
        $radius = $request->query->get('radius');
        $type = $request->query->get('type');

        $response = $googlePlaces->searchPlace($position, $radius, $type);
        $response = json_decode($response, true);

        $view = $this->view($response['results'], 200);
        return $this->handleView($view);

    }
}
