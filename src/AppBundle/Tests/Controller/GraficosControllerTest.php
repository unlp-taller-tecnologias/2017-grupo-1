<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class GraficosControllerTest extends WebTestCase
{
    public function testIndexgraficos()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/indexGraficos');
    }

    public function testQuiencumple()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/quienCumple');
    }

    public function testDosisrecibidasindex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/dosisRecibidasIndex');
    }

    public function testDosisrecibidasgrafico()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/dosisRecibidasGrafico');
    }

}
