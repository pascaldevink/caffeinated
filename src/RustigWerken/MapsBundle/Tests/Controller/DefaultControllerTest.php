<?php

namespace RustigWerken\MapsBundle\Tests\Controller;

use Liip\FunctionalTestBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $this->assertContains('Draadloos Internet', $client->getResponse()->getContent());
        $this->assertContains('Bedraad Internet', $client->getResponse()->getContent());
        $this->assertContains('Stopcontact', $client->getResponse()->getContent());
        $this->assertContains('Food/snacks', $client->getResponse()->getContent());
        $this->assertContains('Weinig geluid', $client->getResponse()->getContent());
    }
}