<?php

namespace LocalizeBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $client = static::createClient(
            array(),
            array(
                'HTTP_HOST' => '127.0.0.1:8000', //dependent on server
            ));
        $client->followRedirects(true);

        $crawler = $client->request('GET', '/');

//        var_dump($client->getResponse()->getContent());

//        $this->assertContains('Let\'s rock!', $client->getResponse()->getContent());
    }
}
