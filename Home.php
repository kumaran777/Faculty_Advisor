<?php session_start(); ?>
<?php
    include ('C:\xampp\htdocs\Faculty_Advisor\alert.php');
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Faculty-Advisor</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="icon" id="ico" href="images/icon.jpg">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Oleo Script' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Cinzel Decorative' rel='stylesheet'>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="js\alert.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Federo' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Allan' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Denk One' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Arya' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Barlow Condensed' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>

  <style>
    #ico
    {
     border-radius: 5%;
    }
  body {
    font: 400 15px/1.8 Lato, sans-serif;
    color: #777;
  }
    .container {
    padding: 80px 120px;
  }
  .person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width:200%;
    height: 80%;
  }
  .person:hover {
    border-color: #f1f1f1;
  }
  h3, h4 {
    margin: 10px 0 30px 0;
    letter-spacing: 10px;      
    font-size: 20px;
    color: #111;
  }
  #son{
    margin: 10px 0 30px 0;
    letter-spacing: 10px;      
    font-size: 30px;
    color: black;
    position: relative;
    top:-120px;
    margin-left: -525px;
  }
  .hlo
  {
    letter-spacing: 5px;      
    font-size: 15px;
    color: black;
    position: relative;
    top:-140px;
    margin-left: -825px;
  }
  .container {
    padding: 80px 120px;
  }
  .carousel-inner img {
    width: 100%; /* Set width to 100% */
    margin: auto;
  }
  .carousel-caption h3 {
    color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .btn {
    padding: 10px 20px;
    background-color: #333;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
  }
  .modal-header, h4, .close {
    background-color: #333;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
  .nav-tabs li a {
    color: #777;
  }  
  .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
    color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .open .dropdown-toggle {
    color: #fff;
    background-color: #555 !important;
  }
  .dropdown-menu li a {
    color: #000 !important;
  }
  .dropdown-menu li a:hover {
    background-color: red !important;
  } 
  .form-control {
    border-radius: 0;
  }
  textarea {
    resize: none;
  }
  .img
  {
    border-radius: 5px;
    width: 200px;
   transition: transform .2s;
   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

  }
  .img:hover 
  {
    -ms-transform: scale(1.1); /* IE 9 */
    -webkit-transform: scale(1.1); /* Safari 3-8 */
    transform: scale(1.1); 
  }
  .img1
  {
    border-radius: 5px;
    width: 200px;
   transition: transform .2s;
   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }

  .img1:hover 
  {
    -ms-transform: scale(1.1); /* IE 9 */
    -webkit-transform: scale(1.1); /* Safari 3-8 */
    transform: scale(1.1); 
  }

.img2
  {
    border-radius: 5px;
    width: 200px;
   transition: transform .2s;
   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }

  .img2:hover 
  {
    -ms-transform: scale(1.1); /* IE 9 */
    -webkit-transform: scale(1.1); /* Safari 3-8 */
    transform: scale(1.1); 
  }

.img3
  {
    border-radius: 5px;
    width: 200px;
   transition: transform .2s;
   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }

  .img3:hover 
  {
    -ms-transform: scale(1.1); /* IE 9 */
    -webkit-transform: scale(1.1); /* Safari 3-8 */
    transform: scale(1.1); 
  }
  .glyphicon-folder-close { color: yellow}
::-webkit-scrollbar {
  width: 6px;
}
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 2px;
}
::-webkit-scrollbar-thumb {
  background: silver; 
  border-radius: 10px;
}
::-webkit-scrollbar-thumb:hover {
  background: litegray; 
}
div.polaroid {
  border-radius: 5px;
  width: 200px;
  height: 150px;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
}
#demo
{
  position: relative;
  margin-top: 13px;
}
#star
{
  letter-spacing: 3px; 
  border-radius: 5px;
  position: relative;
  margin-left: 570px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
#align
{
  letter-spacing: 3px; 
  border-radius: 5px;
  position: relative;
  margin-left: 650px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
#star1
{
  letter-spacing: 3px; 
  border-radius: 4px;
  position: relative;
  margin-left: 575px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
#star2
{
  letter-spacing: 3px; 
  border-radius: 4px;
  position: relative;
  margin-top: 5px;
  margin-left: 570px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
#fetch
{
  letter-spacing: 3px; 

  position:absolute;
  top: 7px;
  margin-left: 200px;

}
#delete
{
  letter-spacing: 3px; 

  position: absolute;
  top: 0px;
  margin-left: 125px;

}
#vision
{
  letter-spacing: 1px; 
  color:  #A9A9A9;
  position: absolute;
  top: 91em;
  left: 310px;

}
#mission
{
  letter-spacing: 1px; 
  color:  #A9A9A9;
  position: absolute;
  top: 69em;
  left: 675px;

}
</style>


</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage" ><i class="fa fa-book" aria-hidden="true"></i>Sona</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">HOME</a></li>
        <li><a href="#details">DETAILS</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="guideline.php">GUIDE</a></li>
            <li><a onclick=" about() ">ABOUT</a></li>
            <li><a href="https://www.sonatech.ac.in/">Official_College_Website</a></li>
          </ul>
        </li>
        <li style="font-family: Alegreya Sans SC;font-size: 18px;"><a onclick=" details() "><i class="fa fa-fw fa-user"></i> <?php  if (isset($_SESSION['facultyname'])) : ?><strong> <?php echo $_SESSION['facultyname']; ?> </strong> 
            
             
        <?php endif ?>  </a></li>
        <li><a href="Login&Registration.php">LOG-OUT</a></li>
        <li><a><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/banne.jpg" alt="New York" width="1200" height="700">
        <div class="carousel-caption">
          <h2 id="son" style="font-family: Cinzel Decorative;color: black;">Sona College of Technology..!</h2>
          <p class="hlo">New Platform for Faculty-Advisor</p>
        </div>      
      </div>


  <p style=" font-family: 'Federo';text-align: center;font-size: 20px;">Click the Button to Store Students Details....!</p>
 <a href="details.php"><button id="star" type="button" class="btn btn-secondary btn-lg" style="font-family: 'Allan';">CLICK ME TO STORE & FETCH DETAILS....!</button></a>

    
    <!-- Left and right controls -->
   
</div>
<div id="details">
<div class="container text-center">
  <h3>Details</h3>
  <p><em>We love Faculty satisfaction!</em></p>
  <p>We have created page for individual years..Click the images to Fetch Students Details...!</p>
  <br>
  <div class="row">

    <div class="col-sm-3" >
      <p class="text-center"><strong>1'st Year</strong></p><br>
      <div class="polaroid" >
      <a href="#demo" data-toggle="collapse">
        <a href="fetchone.php" ><img class="img" src="images/img.jpg" class="img-responsive person" alt="Random Name" ></a>
      </a>
      <div id="demo">
        <p style="font-family: 'Oswald';">Click the Image to Fetch First Year Students Details</p>
      </div>
      </div>
    </div>

    <div class="col-sm-3">
      <p class="text-center"><strong>2'nd Year</strong></p><br>
        <div class="polaroid" class="imgp">
      <a href="#demo2" data-toggle="collapse">
        <a href="fetchtwo.php"> <img class="img1" src="images/img1.jpg" class="img-responsive person" alt="Random Name"></a>
      </a>
      <div id="demo">
        <p style="font-family: 'Oswald';">Click the Image to Fetch Second Year Students Details</p>
      </div>
    </div>
  </div>
     <div class="col-sm-3">
      <p class="text-center"><strong>3'rd Year</strong></p><br>
        <div class="polaroid" class="imgp">
      <a href="#demo3" data-toggle="collapse">
         <a href="fetchthree.php"><img class="img2" src="images/img2.jpg" class="img-responsive person" alt="Random Name"></a>
      </a>
      <div id="demo">
        <p style="font-family: 'Oswald';">Click the Image to Fetch Third Year Students Details</p>
      </div>
    </div>
  </div>
    <div class="col-sm-3">
      <p class="text-center"><strong>4'th Year</strong></p><br>
        <div class="polaroid" class="imgp">
      <a href="#demo4" data-toggle="collapse">
        <a href="fetchfour.php"> <img class="img3" src="images/img3.jpg" class="img-responsive person" alt="Random Name"></a>
      </a>
      <div id="demo">
        <p style="font-family: 'Oswald';">Click the Image to Fetch Final Year Students Details</p>
      </div>
    </div>
  </div>
  </div>
</div>
</div>
</div>
  <p style=" font-family: 'Federo';text-align: center;font-size: 20px;">Here You Can See Particular Student Details [or] Delete Details....!</p>


   
       <div class="container">
        <h2 style="color: black;">Fetch Details:</h2>
        <p style="color: black;">Enter the Regno to Fetch Details....!</p>
        <form action="partid.php" method="POST">
          <div class="form-group">
             <label>
          <p class="label-txt" style="color: black;" >ENTER STUDENT REGNO ?</p>
          <input type="number" name="regno" id="regno" class="input" required="required">
          <div class="line-box" style="width: 250px; height:3px;">
            <div class="line"></div>
          </div>
        </label>
          </div>
          <button type="submit" class="btn btn-secondary" style="border-radius: 4px;">Fetch</button>
        </form>
      </div>

       <div class="container" id="del" style="text-align: right;">
        <h2 style="color: black;">Delete Details:</h2>
        <p style="color: black;">Enter the Regno to Delete Records....!</p>
        <form action="partidel.php" method="POST">
          <div class="form-group">
             <label>
          <p class="label-txt" style="color: black;" >ENTER STUDENT REGNO ?</p>
          <input type="number" name="regno" id="regno" class="input" required="required">
          <div class="line-box" style="width: 250px; height:3px;">
            <div class="line"></div>
          </div>
        </label>
          </div>
          <button type="submit" class="btn btn-secondary" style="border-radius: 4px;">Delete</button>
        </form>
      </div>


 <a href="Stulist.php"><button id="align" type="button" class="btn btn-secondary btn-lg" style="font-family: 'Cinzel Decorative';">Students-List</button></a>


<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em>We love our students!</em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Student?  Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker "></span> Sona College of Technology,Junction Main Rd, Salem, Tamil Nadu 636005</p>
      <p><span class="glyphicon glyphicon-phone "></span> Phone:  91 - 427 - 2443545, 4099999</p>
      <p><span class="glyphicon glyphicon-print "></span> Fax:  91 - 427 - 4099888.</p>
      <p><span class="glyphicon glyphicon-envelope "></span> Email: info[At]sonatech.ac.in</p>
    </div>
    <form action="feedback.php" method="post">
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required autocomplete="off">
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required autocomplete="off">
        </div>
      </div>
      <textarea class="form-control" id="comment" name="comment" placeholder="Comment" rows="5" autocomplete="off"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </form>
  </div>
  <br>
  <h3 class="text-center">From The Students...!</h3>  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">College</a></li>
    <li><a data-toggle="tab" href="#menu1">Campus</a></li>
    <li><a data-toggle="tab" href="#menu2">Academics</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2>Sona College of Technology</h2>
      <p>Learning is a Celebration....!</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h2>Sona Campus Life</h2>
      <p>The Arcadian environ @ Sona makes the College life the most memorable experience....!</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h2>Sona Academics</h2>
      <p>The dedicated team of faculty members and awe-inspiring infrastructure ensure that the students celebrate learning @ SONA....!</p>
    </div>
  </div>
</div>


<!-- Image of location/map -->
<!--<img src="map.jpg" class="img-responsive" style="width:100%"!-->


<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
function guide(){
  Swal.fire({
  title: 'Guide-Lines',
  imageHeight: 1500,
  imageAlt: 'A tall image'
})
}
function guide(){
  Swal.fire({
  title: 'Guide-Lines',
  imageHeight: 1500,
  imageAlt: 'A tall image'
})
}
function about(){
  Swal.fire({
  title: 'About.!',
  text: 'As a Student Developer we have planned to make a small workable Website for Faculty-Advisor and we started learning HTML,CSS,JS mainly and we pooled our idea together we started developing a website but we refered numoures websites in keen on design of our website ,this is how we basically started to Build this Website',
   footer: '<h5 style="font-family: Cinzel Decorative;color: black;"><strong>Kumaran R , IT-C</strong></h5>',
  imageUrl: 'images/robo.png',
  //imageWidth: 400,
 // imageHeight: 200,
  imageAlt: 'Custom image',
})

}

function firstyear() {
  var data = 'your data to pass into PHP';
  $ajax({
    url: 'firstyear.php',
    data: data,
    type: POST,
  });
}

</script>
<p id="vision" style="font-size: 18px;background: -webkit-linear-gradient(gray, black);-webkit-background-clip: text;-webkit-text-fill-color: transparent; ;">
<strong style="font-family: Cinzel Decorative;color: black; letter-spacing:10px;font-size: 20px;">VISION:</strong><br>
"To become an institute of great repute,<br> in the fields of Science, Engineering, Technology and<br> Management studies, by offering a full<br> range of programmes of global standard to foster research, <br
>and to transform the students into globally competent personalities."</p>
<p id="mission" style="font-size: 18px;text-align: right;background: -webkit-linear-gradient(black, gray);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
<strong style="font-family: Cinzel Decorative;color: black; letter-spacing: 10px;font-size: 20px;">MISSION:</strong><br>
"Sona College of Technology is a private engineering institution<br> that offers engineering degree programmes at under graduate <br> level and post graduate level, computer applications and<br> management studies at post graduate level and doctoral<br> programmes in the areas of engineering and science<br> and humanities."</p>


</body>

</html>

