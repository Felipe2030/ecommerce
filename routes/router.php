<?php

function load(string $controller, string $action)
{
    $controllerNamespace = "app\\controllers\\{$controller}";

    if (!class_exists($controllerNamespace)) {
        throw new Exception("O controller {$controller} não existe.");
    }

    $controllerInstance = new $controllerNamespace();

    if (!method_exists($controllerInstance, $action)) {
        throw new Exception("O método {$action} não existe no controller {$controller}.");
    }

    $controllerInstance->$action((object) $_REQUEST);
}

$router = [
    "GET" => [
        "/"            => function() { return load("EcommerceController", "index"); },
        "/about"       => function() { return load("EcommerceController", "about"); },
        "/testimonial" => function() { return load("EcommerceController", "testimonial"); },
        "/product"     => function() { return load("EcommerceController", "product"); },
        "/blog_list"   => function() { return load("EcommerceController", "blog_list"); },
        "/contact"     => function() { return load("EcommerceController", "contact"); },
        // "/payments"    => function() { return load("PaymentsController", "index"); },
        // "/payments/notification" => function() { return load("PaymentsController", "notification"); },
    ],

    "POST" => [
        "/address/create" => function() { return load("AddressController", "create"); },
    ]
];
