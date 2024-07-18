<?php

namespace app\controllers;

class EcommerceController 
{
    public function index($params)
    {
        return Controller::view('ecommerce/index');
    }

    public function about($params)
    {
        return Controller::view('ecommerce/about');
    }

    public function product($params)
    {
        return Controller::view('ecommerce/product');
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