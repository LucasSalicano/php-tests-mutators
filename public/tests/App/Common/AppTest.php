<?php

namespace App\Common;

use App\Entity\Customer;
use App\Models\Sale;
use PHPUnit\Framework\TestCase;

class AppTest extends TestCase
{
    private Customer $customer;
    private Sale $sale;

    protected function setUp(): void
    {
        $this->customer = new Customer("Lucas", new \DateTime("2002-01-01"));
        $this->sale = new Sale();
    }

    public function testCheckIfTheCustomerIsAdult()
    {
        self::assertTrue($this->customer->isAdult());
    }

    public function testMakeSureTheCustomerIsNotAnAdult()
    {
        $customer = new Customer("Lucas", new \DateTime("2004-01-01"));
        self::assertFalse($customer->isAdult());
    }

    public function testCheckIfTheCustomerIs18YearsOld()
    {
        $customer = new Customer("Lucas", new \DateTime("2003-01-01"));
        self::assertTrue($customer->isAdult());
    }

    public function testCheckTheCustomersAge()
    {
        self::assertSame(19, $this->customer->age());
    }

    public function testCheckIfYouCanMakeTheSale()
    {
        $message = $this->sale->makeSale($this->customer);

        self::assertSame("Successful sale", $message);
        self::assertIsString($message);
    }

    public function testCheckIfYouCanMakeTheSaleNotAdult()
    {
        $customer = new Customer("Lucas", new \DateTime("2006-01-01"));
        $message = $this->sale->makeSale($customer);

        self::assertSame("Sale not made, as the customer is not an adult.", $message);
        self::assertIsString($message);
    }
}