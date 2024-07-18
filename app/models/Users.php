<?php

namespace app\models;

use CoffeeCode\DataLayer\DataLayer;

class User extends DataLayer
{
    public function __construct()
    {
        parent::__construct("users", ["nm_email", "nm_password"], "id", false);
    }
}
