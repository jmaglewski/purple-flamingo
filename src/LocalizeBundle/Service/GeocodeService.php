<?php

namespace LocalizeBundle\Service;

use Symfony\Component\DependencyInjection\Container;

/**
 * Class GeocodeService
 * @package LocalizeBundle\Service
 */
class GeocodeService
{
    /**
     * @var ContainerBuilder
     */
    var $container;

    /**
     * GeocodeService constructor.
     * @param Container $container
     */
    function __construct(Container $container)
    {
        $this->container = $container;
    }

    /**
     * @param $remoteAddress
     * @return string
     */
    public function getLocation($remoteAddress) {
        $result = $this->container
            ->get('bazinga_geocoder.geocoder')
            ->using('google_maps')
            ->geocode($remoteAddress);
        return $result->first()->getLatitude().','.$result->first()->getLongitude();
    }
}