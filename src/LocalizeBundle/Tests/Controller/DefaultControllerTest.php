<?php
/**
 * Created by IntelliJ IDEA.
 * User: jacek.maglewski
 * Date: 28.04.16
 * Time: 08:15
 */

namespace LocalizeBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();
        $client->followRedirects(true);

        $crawler = $client->request('GET', '/');
        $button = $crawler->filter('#start');

        $this->assertEquals('Let\'s rock!', $button->attr('value'));
    }
}