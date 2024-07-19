<?php

namespace app\controllers;

use MercadoPago\SDK;
use MercadoPago\Preference;
use MercadoPago\Item;

class PaymentsController 
{
    public function index($params)
    {
       $access_token = "TEST-6486782990063671-071808-fe1ef714bdb356ee403713db82c3ca3d-327400008";

       SDK::setAccessToken($access_token);

       $preference = new Preference();
       $item = new Item();

       session_start();

        if (isset($_SESSION['products']) && is_array($_SESSION['products'])) {
            for ($i = 0; $i < count($_SESSION['products']); $i++) {
              $product = $_SESSION['products'][$i];
              $item->title       = "Camiseta";
              $item->quantity    = 10;
              $item->unit_price  = (double)1;
              $data[] = $item;
            }
        } else {
           echo "No products in the session.";
        }

        $preference->items = $data;
     

       $preference->back_urls = array(
            "success" => "http://localhost:8080/payments/success",
            "failure" => "http://localhost:8080/payments/failure",
            "pending" => "http://localhost:8080/payments/pending"
       );

       $preference->notification_url   = "http://localhost:8080/payments/notification";
       $preference->external_reference = 4545;
       $preference->save();

       $link = $preference->init_point;

       header('Location: '. $link);
       exit;
    }

    public function notification($params) 
    {
        $colletion_id = "95656665594";
        $access_token = "TEST-6486782990063671-071808-fe1ef714bdb356ee403713db82c3ca3d-327400008";

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.mercadopago.com/v1/payments/'.$colletion_id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET', 
            CURLOPT_HTTPHEADER => array(
             'Authorization: Bearer '. $access_token
            )
        ));

        $payment_Info = json_decode(curl_exec($curl), true);
        curl_close($curl);
        echo "<pre>";
        var_dump ($payment_Info);
    }

    public function failure($params)
    {
        header('Location: /cart');
        exit;
    }
}