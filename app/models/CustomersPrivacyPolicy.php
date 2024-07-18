<?php

namespace app\models;

use CoffeeCode\DataLayer\DataLayer;

class CustomersPrivacyPolicy extends DataLayer
{
    public function __construct()
    {
        parent::__construct("customers_privacy_policy", ["privacy_policy_id", "customers_id", "ip_address"], "id", false);
    }
}
