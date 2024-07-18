<?php

namespace app\models;

use CoffeeCode\DataLayer\DataLayer;

class Profile extends DataLayer
{
    public function __construct()
    {
        parent::__construct("profile", ["nm"], "id", false);
    }
}
