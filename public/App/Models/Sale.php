<?php

namespace App\Models;

use App\Entity\Customer;

class Sale
{
    public function makeSale(Customer $customer): string
    {
        if (!$customer->isAdult()) {
            return "Sale not made, as the customer is not an adult.";
        }

        return "Successful sale";
    }
}