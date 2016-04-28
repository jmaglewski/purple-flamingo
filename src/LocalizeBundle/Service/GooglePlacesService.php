<?php
namespace LocalizeBundle\Service;

use Symfony\Component\DependencyInjection\Container;

class GooglePlacesService
{
    /**
     * @var string
     */
    const ENDPOINT_URL = 'https://maps.googleapis.com/maps/api/place/nearbysearch/json?key=%s&location=%s&radius=%s&type=%s';

    var $webClient;
    var $googleApiServerKey;

    function __construct($webClient, $googleApiServerKey)
    {
        $this->webClient = $webClient;
        $this->googleApiServerKey = $googleApiServerKey;
    }

    public function searchPlace($location, $radius, $type)
    {
        $url = $this->createURL($location, $radius, $type);

        $response = $this->webClient->get($url);

        if (!$response->isOk()) {
            return null;
        }

        return $response->getContent();
    }

    private function createURL($location, $radius, $type)
    {
        return sprintf($this::ENDPOINT_URL, $this->googleApiServerKey, $location, $radius, $type);
    }
}