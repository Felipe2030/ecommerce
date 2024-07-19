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
        // Ecommerce
        "/"            => function() { return load("EcommerceController", "index"); },
        "/login"       => function() { return load("EcommerceController", "login"); },
        "/register"    => function() { return load("EcommerceController", "register"); },
        "/about"       => function() { return load("EcommerceController", "about"); },
        "/testimonial" => function() { return load("EcommerceController", "testimonial"); },
        "/product"     => function() { return load("EcommerceController", "product"); },
        "/description" => function() { return load("EcommerceController", "description"); },
        "/blog_list"   => function() { return load("EcommerceController", "blog_list"); },
        "/contact"     => function() { return load("EcommerceController", "contact"); },
        "/cart"        => function() { return load("EcommerceController", "cart"); },
        // Core
        "/admin"           => function() { return load("CoreController", "index"); },
        "/admin/register"  => function() { return load("CoreController", "register"); },
        "/admin/recovery"  => function() { return load("CoreController", "recovery"); },
        "/admin/home"      => function() { return load("CoreController", "home"); },
        "/admin/logout"    => function() { return load("CoreController", "logout"); },
        "/payments"        => function() { return load("PaymentsController", "index"); },
        "/payments/failure" => function() { return load("PaymentsController", "failure"); },
        "/payments/failure" => function() { return load("PaymentsController", "failure"); },
    ],

    "POST" => [
        "/cart"            => function() { return load("EcommerceController", "cart"); },
        "/admin/login"     => function() { return load("CoreController", "index"); },
        "/admin/register"  => function() { return load("CoreController", "register"); },
        "/payments/notification" => function() { return load("PaymentsController", "notification"); }
        // "/address/create" => function() { return load("AddressController", "create"); },
    ]
];
