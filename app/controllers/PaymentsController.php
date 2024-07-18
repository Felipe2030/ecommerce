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

       $item->title       = "Camiseta";
       $item->quantity    = 1;
       $item->unit_price  = (double)1;
       $preference->items = array($item);

       $preference->back_urls = array(
            "success" => "http://localhost:8080/payments/success",
            "failure" => "http://localhost:8080/payments/failure",
            "pending" => "http://localhost:8080/payments/pending"
       );

       $preference->notification_url   = "http://localhost:8080/payments/notification";
       $preference->external_reference = 4545;
       $preference->save();

       $link = $preference->init_point;
       echo $link;
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
}