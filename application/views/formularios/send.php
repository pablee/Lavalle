<?php
    //$to = $para;

    $to="pgarcia@grimoldi.com";
/*    $subject = "Consulta";

    $mensaje = '<html>
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

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    // More headers
    $headers .= "From: ".$mail." \r\n";


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

    return $envio;
*/

    $from_email         = $mail; //from mail, it is mandatory with some hosts
    $recipient_email    = $to; //recipient email (most cases it is your personal email)

    //Capture POST data from HTML form and Sanitize them,
    $sender_name    = filter_var($nombre, FILTER_SANITIZE_STRING); //sender name
    $reply_to_email = filter_var($mail, FILTER_SANITIZE_STRING); //sender email used in "reply-to" header
    $subject        = "Consulta"; //get subject from HTML form
    $message        = "Probando adjuntos";

    /* //don't forget to validate empty fields
    if(strlen($sender_name)<1){
        die('Name is too short or empty!');
    }
    */

    foreach($upload_data as $data)
    {
        $file_tmp_name    = $data['tmp_name'];
        $file_name        = $data['file_name'];
        $file_size        = $data['file_size'];
        $file_type        = $data['file_type'];
        //$file_error       = $data['error'];
    }
    //Get uploaded file data
/*
    if($file_error > 0)
    {
        die('Upload error or No files uploaded');
    }
*/
    //read from the uploaded file & base64_encode content for the mail
    $handle = fopen($file_tmp_name, "r");
    $content = fread($handle, $file_size);
    fclose($handle);
    $encoded_content = chunk_split(base64_encode($content));

    $boundary = md5("sanwebe");
    //header
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "From:".$from_email."\r\n";
    $headers .= "Reply-To: ".$reply_to_email."" . "\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n";

    //plain text
    $body = "--$boundary\r\n";
    $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $body .= chunk_split(base64_encode($message));

    //attachment
    $body .= "--$boundary\r\n";
    $body .="Content-Type: $file_type; name=".$file_name."\r\n";
    $body .="Content-Disposition: attachment; filename=".$file_name."\r\n";
    $body .="Content-Transfer-Encoding: base64\r\n";
    $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n";
    $body .= $encoded_content;

    $sentMail = @mail($recipient_email, $subject, $body, $headers);
    if($sentMail) //output success or failure messages
    {
        die('Thank you for your email');
    }else{
        die('Could not send mail! Please check your PHP mail configuration.');
    }
?>