<?php

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CustomerControllerTest extends WebTestCase
{
    public function testCustomer()
    {
        $client = static::createClient();
        $client->request('GET', '/customer/1');
        $this->assertResponseIsSuccessful();
        $this->assertResponseStatusCodeSame(200);
        $this->assertSelectorTextContains('div',' Customer name: Customer1 ');
        $this->assertSelectorTextContains('div','Customer number: 12345');
        $this->assertSelectorTextContains('h1','Customer birthday: 1-1-2020');

    }
}