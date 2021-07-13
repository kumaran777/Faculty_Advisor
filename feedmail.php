<?php 
    session_start();    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $cmt = $_POST['cmt'];

    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    //smtp settings
    $mail->isSMTP(); // send as HTML
    $mail->Host = "smtp.gmail.com"; // SMTP servers
    $mail->SMTPAuth = true; // turn on SMTP authentication
    $mail->Username = "sonafacultyadvisor@gmail.com"; // Your mail
    $mail->Password = 'sona2000'; // Your password mail
    $mail->Port = 587; //specify SMTP Port
    $mail->SMTPSecure = 'tls';                               
    $mail->setFrom($_POST['email'],$_SESSION['facultyname']);
    $mail->addAddress($email); // Your mail
    $mail->addReplyTo($_POST['email'],$_POST['name']);
    $mail->isHTML(true);
    $mail->Subject='Query on you:';
    $mail->Body='
<html>
<head>
  <link href=https://fonts.googleapis.com/css?family=Bad Script>
  <link href=https://fonts.googleapis.com/css?family=Cormorant Upright>
  <link href=https://fonts.googleapis.com/css?family=Dancing Script>
  <link href=https://fonts.googleapis.com/css?family=Federo>
  <title>Hlo</title>
</head>
<body>
        <p style="font-family: Bad Script;font-size: 15px;">Hello '.$name.' from Mr.'.$_SESSION['facultyname'].' (Faculty Advisor)<br>'.$cmt.' </p><br>
</body>
<html>';
        if($mail->send())
            {
                header("Location:bot.php");
            }
        else
            {
                $errors = '<div class="alert alert-danger" role="alert">Sorry, Your emails does not exists in our record database</div>';
            }
    exit();
?>