<?php

namespace app\models;

use CoffeeCode\DataLayer\DataLayer;

class Product extends DataLayer
{
    public function __construct()
    {
        parent::__construct("products", ["nm", "nm_descrition", "nm_price", "nu_amount"], "id", false);
    }
}
