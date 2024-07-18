<?php

namespace app\controllers;

use app\models\Address;

class AddressController 
{
    public function create($params)
    {
        $address = new Address();
        $address->nm = "Rua Exemplo";
        $address->nm_cep = "12345-678";
        $address->nu = "123";
        $address->nm_reference = "Perto do Parque";
        $address->nm_complement = "Apartamento 1";
        $address->nm_neighborhood = "Centro";
        $address->nm_city = "Cidade Exemplo";
        $address->nm_country = "Brasil";
        $address->nm_states = "Estado Exemplo";
        $address->customers_id = 1;
        var_dump($address->save());
        
        // Exemplo de redirecionamento após salvar
        header('Location: /');
        exit;
    }

}