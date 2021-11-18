<?php

namespace App\Common;

use App\Entity\Customer;
use App\Models\Sale;

class App
{
    public function __invoke()
    {
        $customer = new Customer("Lucas", new \DateTime('2015-10-01'));
        $sale = new Sale();
        $sale = $sale->makeSale($customer);
        echo $sale;
    }
}