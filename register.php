<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--?php
	$userid = $_POST['userid'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	// Database connection
	$conn = mysqli_connect('localhost','root','','faculty_advisor');
	if($conn->connect_error)
	{
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	}
	else 
	{
	$stmt = $conn->prepare("insert into register(userid, email, password) values(?, ?, ?)");
	$stmt->bind_param("sss", $userid, $email, $password);
	$stmt->execute();
    $query = mysqli_query($conn,"SELECT * FROM register WHERE email='$email'")
    or die(mysqli_error($conn));
		    
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
    $mail->setFrom($_POST['email'],$_POST['name']);
    $mail->addAddress($email); // Your mail
    $mail->addReplyTo($_POST['email'],$_POST['name']);
    $mail->isHTML(true);
    $mail->Subject='Welcome to Sona Faculty_Advisor Site:' .$_POST['subject'];
    $code= rand(100,999);
    mail($email, "Send Code", $message);
    $mail->Body= $message="Welcome ".$userid." to our page this is a site for Faculty Advisor's for easy manipulation of Students Details,If you Have any Query you Can Mail to this Id : sonafacultyadvisor@gmail.com";
    if (mysqli_num_rows ($query)==1)
		{
		if($mail->send())
			{
				header("Location:Login&Registration.php");
			}
		else
			{
			    $errors = '<div class="alert alert-danger" role="alert">Sorry, Your emails does not exists in our record database</div>';
			}
		}
	exit();
	$stmt->close();
	$conn->close();
	}
?!-->


<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'faculty_advisor');
	$userid = "";
	$email = "";
  	$userid = $_POST['userid'];
  	$email = $_POST['email'];
  	$password = $_POST['password'];

  	$sql_u = "SELECT * FROM register WHERE userid='$userid'";
  	$sql_e = "SELECT * FROM register WHERE email='$email'";
  	$res_u = mysqli_query($db, $sql_u);
  	$res_e = mysqli_query($db, $sql_e);

  	if (mysqli_num_rows($res_u) > 0) {
  	   $_SESSION['status']="Username already exist,please use another Username,and Register Again";
       $_SESSION['status_code']="warning";
       if( $_SESSION['status_code']=="warning")
       {
       	include ('Login&Registration.php');
       }  
  	}else if(mysqli_num_rows($res_e) > 0){
  	  $_SESSION['status']="Email already exist,please use another Email,and Register Again";
       $_SESSION['status_code']="warning";
       if( $_SESSION['status_code']=="warning")
       {
       	include ('Login&Registration.php');
       } 
  	}else{
    $userid = $_POST['userid'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	// Database connection
	$conn = mysqli_connect('localhost','root','','faculty_advisor');
	if($conn->connect_error)
	{
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	}
	else 
	{
	$stmt = $conn->prepare("insert into register(userid, email, password) values(?, ?, ?)");
	$stmt->bind_param("sss", $userid, $email, $password);
	$stmt->execute();
    $query = mysqli_query($conn,"SELECT * FROM register WHERE email='$email'")
    or die(mysqli_error($conn));
		    
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
    $mail->setFrom($_POST['email'],$_POST['name']);
    $mail->addAddress($email); // Your mail
    $mail->addReplyTo($_POST['email'],$_POST['name']);
    $mail->isHTML(true);
    $mail->Subject='Welcome to Sona Faculty_Advisor Site:' .$_POST['subject'];
    $code= rand(100,999);
    mail($email, "Send Code", $message);
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
  <table align="center"> 
          <tr> 
              <th><p style="font-family: Bad Script;font-size: 30px;">Welcome '.$userid.' 🎁</p></th> 
          </tr> 
          <tr> 
              <td style="text-align:center;font-family: Cormorant Upright;font-size: 22px;">This is a site for Faculty Advisor</td><br>
          </tr>
          <br> 
          <tr> 
              <td style="text-align:center;font-family: Dancing Script;font-size: 22px;">For easy manipulation of Students Details,If you Have any Query you Can Mail to this Id 📬: sonafacultyadvisor@gmail.com</td><br> 
          </tr> 
          <tr> 
              <td style="text-align:center;font-family: Federo;font-size: 22px;">As a Student Developer we have planned to make a small workable Website for Faculty-Advisor<br> and we started learning HTML,CSS,JS mainly and we pooled our idea<br> together we started developing a website<br> but we refered numoures websites<br> in keen on design of our website ,this is how we Build this Website...</td> 
          </tr> 
        </table> 
</body>
<html>';
    if (mysqli_num_rows ($query)==1)
		{
		if($mail->send())
			{
				header("Location:Login&Registration.php");
			}
		else
			{
			    $errors = '<div class="alert alert-danger" role="alert">Sorry, Your emails does not exists in our record database</div>';
			}
		}
	exit();
  	}
  }
?>