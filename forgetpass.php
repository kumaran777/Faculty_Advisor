
<?php
session_start();
error_reporting(0);

$errors ='';

if($_POST['submit']=='Send')
{
    //keep it inside
    $email=$_POST['email'];
    $password = $_GET['passsword'];
    $con=mysqli_connect("Localhost","root","","faculty_advisor");
    // Check connection
    if (mysqli_connect_errno())
    {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $query = mysqli_query($con,"SELECT * FROM register WHERE email='$email'")
    or die(mysqli_error($con));
    
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
    $mail->Subject='Reset Password:' .$_POST['subject'];
    $code= rand(100,999);
    mail($email, "Send Code", $message);
    $mail->Body= $message="You activation link is:http://localhost/Faculty_Advisor/resetpassword.php?email=code=$code";

    if (mysqli_num_rows ($query)==1)
    {
        if($mail->send())
        {
          $_SESSION['gmail']=$email;
          header("Location:Login&Registration.php");
        }
        $query2 = mysqli_query($con,"UPDATE register SET password='$password' WHERE email='$email'")
        or die(mysqli_error($con)); 
        }
        else
        {
       $errors = '<div class="alert alert-danger" role="alert">Sorry, Your emails does not exists in our record database</div>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ForgotPassword</title>
   <link rel="icon" id="ico" href="images/icon.jpg">
    <link rel="icon" href="images/icon.jpg">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="js\alert.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <style>

#alert
{
   position: relative;
    top: -70px;
    left: 85px;  
}




    </style>

</head>
<body>




   <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="forgetpass.php" method="post">
            <h2 class="title">Forgot Password</h2>
           
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" id="email" name="email" placeholder="Email" placeholder="Email Id" autocomplete="off" required/>
            </div>
           
            <input type="submit" class="btn" name="submit" class="submit-btn" value="Send"/>
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>




<div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              You can send link form here ,By Clicking that link you
              can Reset your Password.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Forgot
            </button>
          </div>
          <img src="images/log.svg" class="image" alt="" />
        </div>
     
      </div>
    </div>

<script>
    const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 9000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  
  html:'<i><b>Please Enter the Valid Email-Id that<br>you have used while registration<br>And Check Your Mail After Few <br>Seconds...</b></i>'
})
</script>

</body>
</html>








