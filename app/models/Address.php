<?php

namespace app\models;

use CoffeeCode\DataLayer\DataLayer;

class Address extends DataLayer
{
    public function __construct()
    {
        parent::__construct("address", ["nm", "nm_cep", "nu", "nm_reference", "nm_complement", "nm_neighborhood", "nm_city", "nm_country", "nm_states", "customers_id"], "id", false);
    }
}
