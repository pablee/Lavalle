<?php

    //$to = $para;
    $to="pgarcia@grimoldi.com";
    $subject = "Consulta";

    $message = '<html>
                 <head>
                  <title>Consulta</title>
                 </head>
                 <body>
                  <p>Nombre</p>
                  '.$nombre.'
                  <p>Telefono</p>
                  '.$telefono.'
                  <p>Consulta</p>
                  '.$consulta.'
                 </body>
                </html>
                ';

    if(isset($producto))
    {
        $message.= '<label> Producto</label>
                    <ul>
                        <li>SKU:'.$producto["sku"].'</li>
                        <li>Titulo:'.$producto["titulo"].'</li>
                        <li>Precio:'.$producto["precio"].'</li>
                        <li>Rubro:'.$producto["rubro"].'</li>
                        <li>Marca:'.$producto["marca"].'</li>
                    </ul>';
    }

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= "From: ".$mail." \r\n";


    $envio = mail($to,$subject,$message,$headers);
    if (!$envio)
    {
        $errorMessage = error_get_last()['message'];
    }

    return $envio;

?>