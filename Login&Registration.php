<?php
    include ('C:\xampp\htdocs\Faculty_Advisor\alert.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" id="ico" href="images/icon.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
     <link href='https://fonts.googleapis.com/css?family=Federo' rel='stylesheet'>
    <link rel="stylesheet" href="style.css" />
      <link href='https://fonts.googleapis.com/css?family=Cinzel Decorative' rel='stylesheet'>
      <link href='https://fonts.googleapis.com/css?family=Allan' rel='stylesheet'>
      <link href='https://fonts.googleapis.com/css?family=Cormorant Upright' rel='stylesheet'>
    <title>Login&Registration</title>
  </head>
  <body>

    <div class="container">
      <img style="position: relative;top:0;left:1405px;width:8%"src="images\logo.png">
      <img style="position: relative;top:0;left:-120px;width:8%"src="images\logo.png">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="login.php" method="post" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" id="userid" name="userid" placeholder="Username" autocomplete="off" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" id="password" name="password" placeholder="Password" autocomplete="off" />
            </div>
            <input type="submit" value="Login" class="btn solid" />
            <i id="alert"  aria-hidden="true" style=" font-family: 'Federo';"><a href="forgetpass.php">Forgot password?</a></i>
            <p class="social-text">Or Sign in with social platforms</p>
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
          <form action="register.php" method="post" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" id="userid" name="userid" placeholder="Username" autocomplete="off" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" id="email" name="email" placeholder="Email" autocomplete="off"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" id="password" name="password" placeholder="Password" autocomplete="off"/>
            </div>
            <input type="submit" class="btn" name="submit" class="submit-btn" value="register"  />
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
            <h3 id="son" style="font-family: Cinzel Decorative;letter-spacing: 10px;font-size: 30px;">Sona Faculty-Advisor</h3>
            <p style="font-family: Cormorant Upright;letter-spacing: 2px;font-size: 20px;">
             " We Welcome You To Sona Faculty-Advisor site Here you can easily Manipulate
              your Students Informations..! "
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="images/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3 id="son" style="font-family: Cinzel Decorative;letter-spacing: 10px;font-size: 30px;">Sona Faculty-Advisor</h3>
            <p style="font-family: Cormorant Upright;letter-spacing: 2px;font-size: 20px;">
             " We Welcome You To Sona Faculty-Advisor site Here you can easily Manipulate
              your Students Informations..! "
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="images/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
