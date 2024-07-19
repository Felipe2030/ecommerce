<?php

namespace app\controllers;

class EcommerceController 
{
    public function index($params)
    {
        $products = ["","","","","","","","","","","",""];
        return Controller::view('ecommerce/index', array("products" => $products));
    }

    public function login($params)
    {
        return Controller::view('ecommerce/login');
    }

    public function register($params)
    {
        return Controller::view('ecommerce/register');
    }

    public function cart($params)
    {
        $products = ["","","","","","","","","","","",""];
        return Controller::view('ecommerce/cart', array("products" => $products));
    }

    public function about($params)
    {
        return Controller::view('ecommerce/about');
    }

    public function description($params)
    {
        $product = [""];
        return Controller::view('ecommerce/description', array("product" => $product));
    }

    public function product($params)
    {
        $products = ["","","","","","","","","","","",""];
        return Controller::view('ecommerce/product', array("products" => $products));
    }

    public function testimonial($params)
    {
        return Controller::view('ecommerce/testimonial');
    }

    public function blog_list($params)
    {
        return Controller::view('ecommerce/blog_list');
    }

    public function checkout($params)
    {
        return Controller::view('ecommerce/checkout');
    }

    public function contact($params)
    {
        return Controller::view('ecommerce/contact');
    }
}