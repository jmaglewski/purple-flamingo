<?php
namespace LocalizeBundle\Tests\Service;

use Buzz\Browser;
use LocalizeBundle\Service\GooglePlacesService;

class GooglePlacesServiceTest extends \PHPUnit_Framework_TestCase
{

    public function testCreateUrl() {

        $browser = $this->getMockBuilder('Buzz\Browser')->getMock();
        $response = $this->getMockBuilder('Buzz\Message\Response')->getMock();
        $response->method('isOk')
            ->willReturn(true);
        $response->method('getContent')
            ->willReturn('{"place1": "somePlace1", "place2": "somePlace2"}');
        $browser->method('get')
            ->willReturn($response);

        $googlePlacesService = new GooglePlacesService($browser, "key");

        $result = $googlePlacesService->searchPlace('50.064650099999994,19.94497990000002', '2000', 'bar');

        $placesObject = json_decode($result);

        $this->assertEquals("somePlace1", $placesObject->place1);
        $this->assertEquals("somePlace2", $placesObject->place2);

    }
}