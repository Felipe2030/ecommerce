<?php

require '../vendor/autoload.php';
require '../routes/router.php';

function handleRequest($router, $envPath)
{
    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
    $request = $_SERVER['REQUEST_METHOD'];

    if (!isset($router[$request]) || !array_key_exists($uri, $router[$request]) || !file_exists($envPath)) {
        throw new Exception("Erro na solicitação: A rota não existe ou o arquivo .env não está presente.");
    }

    $lines = file($envPath);
    foreach ($lines as $line) {
        putenv(trim($line));
    }

    $controller = $router[$request][$uri];
    $controller();
}

try {
    $envPath = "./../.env";
    handleRequest($router, $envPath);
} catch (Exception $e) {
    echo $e->getMessage();
}

