<?php
	var_dump($_POST);
    $to = 'info@meracinternational.com';
    $company = $_POST["company"];
	$contact = $_POST["contact"];
	$phone = $_POST["phone"];
	$whatsapp = $_POST["whatsapp"];
    $email= $_POST["email"];
    $text= $_POST["message"];
    
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>'.$company.' - '.$contact.'</td>
        </tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>phone: '.$phone.'</td></tr>
        <tr><td>Text: '.$text.'</td></tr>
        
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        header( "Location: index.php" );
    }else{
        header( "Location: index.php" );
    }

?>
