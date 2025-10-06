<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MailerTeste extends WebTestCase
{
    public function testSendMail(): void
    {
        $client = static::createClient();
        $client->request('GET', '/send-mail');

        $this->assertResponseIsSuccessful();
        $this->assertStringContainsString('Email envoyé', $client->getResponse()->getContent());
    }
}
