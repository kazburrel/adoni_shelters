<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $service = $_POST['service'];
    $phone = $_POST['phone'];
    $message1 = $_POST['message'];

    $to  = 'support@adonisshelters.com';
    $d = date('Y/ m / d');
    $subject = "Supoort Mail from adonisshelters";
    $message = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome to Pinnaclesafe Limited Bank</title>
    </head>
    <body>
       <p>Name: '.$name.' </p>
       <p>Email: '.$email.' </p>
       <p>Service: '.$service.' </p>
       <p>Phone: '.$phone.' </p>
       <p>Message: '.$message1.' </p>
           
    </body>
    </html>';
    $header = "MIME-Version: 1.0" . "\r\n";
    $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $header .= 'From:Adonis Shelters<support@adonisshelters.com>' . "\r\n";
    $retval = @mail($to, $subject, $message, $header);
    if ($retval) {
        header("Location: contact.php?message=Successfully Sent");
    } else {
        header("Location: contact.php?message=Message Not Sent");
    }
}











?>