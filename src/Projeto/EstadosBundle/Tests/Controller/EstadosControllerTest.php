<?php

namespace Projeto\EstadosBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EstadosControllerTest extends WebTestCase
{
    public function testListarestados()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'listar-estados');
    }

    public function testListaruf()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'listar-uf');
    }

}
