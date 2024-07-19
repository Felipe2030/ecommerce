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
        session_start();

        $products = isset($_SESSION["products"]) ? $_SESSION["products"] : [];

        // Verifique se a requisição é do tipo GET
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            // Verifique se o parâmetro "remove" está definido
            if (isset($params->remove)) {
                // Remova o produto da sessão com base no índice fornecido
                $indexToRemove = (int)$params->remove;
                if (isset($_SESSION["products"][$indexToRemove])) {
                    unset($_SESSION["products"][$indexToRemove]);
                    // Reindexa o array após remoção
                    $_SESSION["products"] = array_values($_SESSION["products"]);
                }
            } 

            // Atualiza a variável $products para refletir a sessão
            $products = $_SESSION["products"];
            
            // Renderiza a view com os produtos atualizados
            return Controller::view('ecommerce/cart', ['products' => $products]);
        } else {
            $_SESSION["products"][] = $params;
        }
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
        $products = ["","","","","","","","","","","","",""];
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