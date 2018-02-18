<?php
namespace tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TestControllerTest extends WebTestCase
{
    
    public function testHomepageResponse() {
        $client = static::createClient();
        $crawler = $client->request('GET', "");
        
        $this->assertTrue($client->getResponse()->isSuccessful(), 'response status is 2xx');
    }
    
    public function testHomepageContent() {
        $client = static::createClient();
        $crawler = $client->request('GET', "");        
        
        $this->assertGreaterThan(0, $crawler->filter('h1')->count());
        $this->assertEquals(1, $crawler->filter('html:contains("Featured Recipes")')->count());
    }
    
}

