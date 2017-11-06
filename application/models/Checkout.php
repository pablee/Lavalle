<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once "mercadopago.php";

class Checkout
{
    public function preference($data)
    {

        $mp = new MP('4512615258228207', 'kEFzRrUBVnRDQtMQGvKwkTdfDNmqvFry');
        $preference_data = array(
                                "items" => array(
                                                array(
                                                    "title" => $data['titulo'],
                                                    "quantity" => 1,
                                                    "currency_id" => "ARS", // Available currencies at: https://api.mercadopago.com/currencies
                                                    "unit_price" => 10.00
                                                    )
                                                )
                                );

        $preference = $mp->create_preference($preference_data);

        return $preference;
    }
}