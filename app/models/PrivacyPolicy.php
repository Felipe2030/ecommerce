<?php

namespace app\models;

use CoffeeCode\DataLayer\DataLayer;

class PrivacyPolicy extends DataLayer
{
    public function __construct()
    {
        parent::__construct("privacy_policy", ["nm", "nm_description"], "id", false);
    }
}
