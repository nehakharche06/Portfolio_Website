<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHP_Mailer/src/Exception.php';
require 'PHP_Mailer/src/PHPMailer.php';
require 'PHP_Mailer/src/SMTP.php';


if(isset($_POST['send'])){
    // $name = $_POST['name'];
    // $email = $_POST['email'];
    // $subject = $_POST['subject'];
    // $message = $_POST['message'];


    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    $mail->isSMTP();  
    $mail->Host = 'smtp.gmail.com'; 
    $mail->SMTPAuth   = true; 
    $mail->Username   = 'nehakharche6602@gmail.com'; 
    $mail->Password   = 'tgnmsldeuvunqvnv';
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465; 



    $mail->setFrom('nehakharche6602@gmail.com');

    $mail->addAddress($_POST["email"]);


    $mail->isHTML(true); 
    $mail->Subject = $_POST['subject'];
    $mail->Body    = $_POST['message'];


    $mail->send();

    echo 
    "

    <script>
        alert('Sent Successullt');
        document.location.href = 'index.html';
    </script>
    "

}
