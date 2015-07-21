<?php

namespace Anyt\FileSearchBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testSearch()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        // check weather we on correct page
        $this->assertTrue($crawler->filter('html:contains("Type Search keywords")')->count() > 0);

        // submit search form with existing keyword
        $form = $crawler->selectButton('Search')->form();
        $form['keyword'] = 'Lorem ipsum';
        $crawler = $client->submit($form);

        $this->assertTrue($crawler->filter('html:contains("2.txt")')->count() > 0);

        // submit search form with not existing keyword
        $form = $crawler->selectButton('Search')->form();
        $form['keyword'] = 'Andrey';
        $crawler = $client->submit($form);

        $this->assertTrue($crawler->filter('html:contains("No files found")')->count() > 0);

    }
}
