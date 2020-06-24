<?php
	var_dump($_POST);
    $to = 'info@meracinternational.com';
	$name = $_POST["name"];
	$email = $_POST["email"];
    $subject= $_POST["subject"];
    $message= $_POST["message"];
    
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $text ='<table style="width:100%">
        <tr>
            <td>'.$name.'</td>
        </tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>Text: '.$message.'</td></tr>
        
    </table>';

    if (@mail($to, $email, $text, $headers))
    {
        header( "Location: index.php" );
    }else{
        header( "Location: index.php" );
    }

?>
