<?php

namespace app\models;

use CoffeeCode\DataLayer\DataLayer;

class ImageProduct extends DataLayer
{
    public function __construct()
    {
        parent::__construct("image_products", ["nm_url", "products_id"], "id", false);
    }
}
