<?php

namespace app\models;

use CoffeeCode\DataLayer\DataLayer;

class Customer extends DataLayer
{
    public function __construct()
    {
        parent::__construct("customers", ["nm", "nm_lastname", "nm_cpf", "dt_birth", "nm_sex", "nm_email", "nm_password"], "id", false);
    }
}
