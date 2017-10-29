<?php

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= "From: ".$mail." \r\n";

    $bHayFicheros = 0;
    $sAdjuntos = "";
    foreach ($_FILES as $vAdjunto)
    {
        if ($bHayFicheros == 0)
        {
            $bHayFicheros = 1;
            $headers .= "Content-type: multipart/mixed;";
            $headers .= "boundary=\"--_Separador-de-mensajes_--\"\n";
        }

        if ($vAdjunto["size"] > 0)
        {
            $sAdjuntos .= "\n\n----_Separador-de-mensajes_--\n";
            $sAdjuntos .= "Content-type: ".$vAdjunto["type"].";name=\"".$vAdjunto["name"]."\"\n";;
            $sAdjuntos .= "Content-Transfer-Encoding: BASE64\n";
            $sAdjuntos .= "Content-disposition: attachment;filename=\"".$vAdjunto["name"]."\"\n\n";
            $oFichero = fopen($vAdjunto["tmp_name"], 'r');
            $sContenido = fread($oFichero, filesize($vAdjunto["tmp_name"]));
            $sAdjuntos .= chunk_split(base64_encode($sContenido));
            fclose($oFichero);
        }
    }


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

    if(isset($sku))
    {
        $message.= '<label> Producto</label>
                        <ul>
                            <li>SKU:'.$sku.'</li>
                            <li>Titulo:'.$titulo.'</li>
                            <li>Precio:'.$precio.'</li>
                            <li>Rubro:'.$rubro.'</li>
                            <li>Marca:'.$marca.'</li>
                        </ul>';
    }


    $envio = mail($to,$subject,$message,$headers);

    if (!$envio)
    {
        $errorMessage = error_get_last()['message'];
    }

    return $envio;


?>