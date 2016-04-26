<?php
namespace LocalizeBundle\Service;

use Symfony\Component\DependencyInjection\Container;

class GooglePlacesService
{
    /**
     * @var string
     */
    const ENDPOINT_URL = 'https://maps.googleapis.com/maps/api/place/nearbysearch/json?key=%s&location=%s&radius=%s&type=%s';

    /**
     * @var Container
     */
    var $container;

    function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function searchPlace($location, $radius, $type)
    {
        $browser = $this->container->get('buzz');

        $url = $this->createURL($location, $radius, $type);

        $response = $browser->get($url);

        if (!$response->isOk()) {
            return null;
        }

        return $response->getContent();
    }

    private function createURL($location, $radius, $type)
    {
        $googleApiKey = $this->container->getParameter('google_api_server_key');
        return sprintf($this::ENDPOINT_URL, $googleApiKey, $location, $radius, $type);
    }
}