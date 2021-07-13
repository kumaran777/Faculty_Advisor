<?php session_start(); ?>
<?php
    include ('C:\xampp\htdocs\Faculty_Advisor\alert.php');
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>chat</title>
  <!-- rel="stylesheet" href="style1.css"!-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link href='https://fonts.googleapis.com/css?family=Alegreya Sans' rel='stylesheet'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="js\alert.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link href='https://fonts.googleapis.com/css?family=Arya' rel='stylesheet'>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cinzel Decorative">
<link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Barrio' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Cinzel Decorative' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Denk One' rel='stylesheet'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=BenchNine">
  <link href='https://fonts.googleapis.com/css?family=Farsan' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Italiana' rel='stylesheet'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
   #son{
    margin: 10px 0 30px 0;
    letter-spacing: 10px;      
    font-size: 30px;
    color: black;
    position: absolute;
    top:175px;
    margin-left: 100px;
    text-shadow:0 1px 2px rgb(0 0 0 / 70%);;
  }
  .hlo
  {
    letter-spacing: 5px;      
    font-size: 15px;
    color: black;
    position: absolute;
    top:225px;
    margin-left:250px;
    text-shadow:0 1px 2px rgb(0 0 0 / 70%);;
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


label {
  display: block;
  position: relative;
  margin: 40px 0px;
}
.label-txt {
  position: absolute;
  top: -1.6em;
  padding: 10px;
  font-family: sans-serif;
  font-size: .8em;
  letter-spacing: 1px;
  color: rgb(120,120,120);
  transition: ease .3s;
}
.input {
  width: 100%;
  padding: 10px;
  background: transparent;
  border: none;
  outline: none;
}

.line-box {
  position: relative;
  width: 100%;
  height: 2px;
  background: #BCBCBC;
}

.line {
  position: absolute;
  width: 0%;
  height: 2px;
  top: 0px;
  left: 50%;
  transform: translateX(-50%);
  background: #8BC34A;
  transition: ease .6s;
}
.label-active {
  top: -3em;
}
.input:focus + .line-box .line {
  width: 100%;
}



button {
  display: inline-block;
  padding: 12px 24px;
  background: rgb(220,220,220);
  font-weight: bold;
  color: rgb(120,120,120);
  border: none;
  outline: none;
  border-radius: 3px;
  cursor: pointer;
  transition: ease .3s;
}

::-webkit-scrollbar{
    width: 2px;
    border-radius: 25px;
}
::-webkit-scrollbar-track{
    background: #f1f1f1;
}
::-webkit-scrollbar-thumb{
    background: #ddd;
}
::-webkit-scrollbar-thumb:hover{
    background: #ccc;
}
.form .inbox{
    width: 100%;
    display: flex;
    align-items: baseline;
}
 .form .user-inbox{
    justify-content: flex-end;
    margin: 10px 0;
}
.form .inbox .icon{
    height: 40px;
    width: 40px;
    color: #fff;
    text-align: center;
    line-height: 40px;
    border-radius: 50%;
    font-size: 18px;
    background: #007bff;
}
.form .inbox .msg-header{
    max-width: 53%;
    margin-left: 7px;
    margin-top: -7px;

}
.form .inbox .msg-header p{
    color:black;
    background:#D3D3D3;
    border-radius: 10px;
    padding: 8px 10px;
    font-size: 14px;
    word-break: break-all;
}
.form .user-inbox .msg-header p{
    color: #333;
    background:#D3D3D3;
}

::selection{
    color: #fff;
    background: #007bff;
}

.modal-body {
position: relative;
right:0px;
padding: 20px;
height: 400px;
overflow-y: scroll;
font-family: 'Marcellus';
  background: url(images/.png) no-repeat center center fixed; 
  -o-background-size: cover;
}
 
 .hello {
  animation: shake 5s;
  animation-iteration-count: infinite;
}
@keyframes shake {
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
}

.zoom {
  transition: transform .2s;
}

.zoom:hover {
  -ms-transform: scale(2.0); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5); 
}
.fixed {
  position: fixed;
  background-image: url("images/bg1.png");
  display: flex;
  justify-content: center;
  align-items: center;
}
.wrapper {
  width: 75%;
  margin: auto;
  background-color: #ccc;
}
@media (min-height: 768px) {
  #wrapper{
    height: 2000px;
  }
}
h1,h2,h3,h4,h6 {font-family: "Lato", sans-serif}
h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
#topnav-right {
  font-family: 'Alegreya Sans SC';font-size: 15px;
  overflow: hidden;
  float: right;
}
#topnav-right{
  text-decoration: none;
  font-size: 17px;
}

#s{

  font-family: 'Alegreya Sans SC';font-size: 18px;
}
#align
{
  letter-spacing: 3px; 
  opacity: .7;
  border-radius: 3px;
  position:relative;
  margin-left: 665px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
#demo
{
  position: relative;
  margin-top: 13px;
}
div.polaroid {
  border-radius: 5px;
  width: 200px;
  height: 150px;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
}

</style>
</head>
<body>
  <div class="wrapper">
  <div class="fixed">
    <img data-toggle="modal" class="hello1" data-target="#studentaddmodal" style="position:absolute;bottom: -720px;right: -1300px;width: 50px" src="images/bg1.png">
    <img data-toggle="modal" class="hello" data-target="#studentaddmodal" style="position:absolute;bottom: -685px;right: -1280px;width: 100px" src="images/bg3.png">
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="studentaddmodal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 80%;">
      <!--header!-->
      <div class="modal-header" style="background-color: #DCDCDC;font-family: 'Denk One';">
       <img class="" src="https://static.hsappstatic.net/bots-ui-app/ex/bot-avatar.jpg" style="width: 40px;border: 2px solid white;border-radius: 50px">
       <img style="width:13px;position: absolute;top:40px;left:45px;display:block;" src="images/online.png">
        <h5 class="modal-title" id="exampleModalLabel" style="position:relative;top: 5px;">&ensp;Sona-Chatbot</h5><br>
        <p class="modal-title" id="exampleModalLabel" style="position:relative;top: 27px;left:-116px;font-family: 'Alegreya Sans';font-size: 13px;">&ensp;online</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <!--header!-->
        <div class="modal-body">
          <div class="form-group">
                  <div class="form">
                    <span style="font-size: 13px;margin-left: 55px;">Anos-Tob</span>
                    <div class="bot-inbox inbox">
                      <div class="icn">
                        <i class="fas"><img src="https://static.hsappstatic.net/bots-ui-app/ex/bot-avatar.jpg" width="40px"></i><br>
                      </div>
                      <div class="msg-header">
                        <p style="word-break: normal;">Hello <?php  if (isset($_SESSION['facultyname'])) : ?> <?php echo $_SESSION['facultyname']; ?><?php endif ?>  how can I help you?😊</p>
                      </div>
                    </div>
                  </div>
                 </div> 
              </div>
                  <div class="modal-footer">
                    <div class="input-group">
                      <input type="text" class="form-control" id="data" placeholder="Ask Your Query here...!"   aria-describedby="basic-addon2" autocomplete="off" >
                      <div class="input-group-append">
                        <button class="btn btn-secondary" type="button" id="send-btn" >Submit</button>
                      </div>
                    </div>
                  </div>  
            </div>
          </div>
        </div>
      </div>
    </div>

 <script>
        $(document).ready(function(){
            $("#send-btn").on("click", function(){
              if ($('#data').val().length!=0) {
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                
                // start ajax code
                $.ajax({
                    url: 'query.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<span style="font-size: 13px;margin-left: 55px;">Anos-Tob</span><div class="bot-inbox inbox"><div class="icn"><i class="fas"><img src="https://static.hsappstatic.net/bots-ui-app/ex/bot-avatar.jpg" width="40px"></i></div><div class="msg-header"><p style="word-break: normal;">'+ result +'</p></div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".modal-body").scrollTop($(".modal-body")[0].scrollHeight);
                    }
                });
              }
            });
        });
        $(document).ready(function() {
            $("#data").keyup(function(event) {
                if (event.which === 13) {
                    $("#send-btn").click();
                 }
        });
 
       $("#send-btn").click(function() {
          })
      });
    </script>

<!--img src="images/robo3.png" style="width:825px;position: absolute;top: 103px;left: 0px;"!-->
<!-- Navbar -->
<div class="w3-top" style="background-color: black;opacity: 0.5">
  <div class="w3-bar w3-black w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-transparent w3-hover-none w3-text-light-grey w3-hover-text-white" href="Login&Registration.php" id="topnav-right" style="letter-spacing: .5px;">LOG-OUT</a>
    <a class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-transparent w3-hover-none w3-text-light-grey w3-hover-text-white" style="letter-spacing: 1px;" id="topnav-right"><i class="fa fa-fw fa-user"></i> <?php  if (isset($_SESSION['facultyname'])) : ?><strong> <?php echo $_SESSION['facultyname']; ?> </strong><?php endif ?>  </a>
    <a class="w3-bar-item w3-hide-small w3-padding-large" id="s" style="letter-spacing: 1.5px;text-decoration-color: white"><i class="fa fa-book"></i>  Sona</a>
    <a href="attendance.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-transparent w3-hover-none w3-text-light-grey w3-hover-text-white" id="topnav-right" style="letter-spacing: .5px;">ATTENDANCE</a>
    <a href="quiz.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-transparent w3-hover-none w3-text-light-grey w3-hover-text-white" id="topnav-right" style="letter-spacing: .5px;">QUIZ</a>
    <a href="guideline.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-transparent w3-hover-none w3-text-light-grey w3-hover-text-white" id="topnav-right" style="letter-spacing: .5px;">GUIDE</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-transparent w3-hover-none w3-text-light-grey w3-hover-text-white" id="topnav-right" style="letter-spacing: .5px;" onclick=" about() ">ABOUT</a>
    <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-transparent w3-hover-none w3-text-light-grey w3-hover-text-white" id="topnav-right" style="letter-spacing: .5px;">CONTACT</a>
    <a href="#details" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-transparent w3-hover-none w3-text-light-grey w3-hover-text-white" id="topnav-right" style="letter-spacing: .5px;">DETAILS</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-transparent w3-hover-none w3-text-light-grey w3-hover-text-white" id="topnav-right" style="letter-spacing: .5px;">HOME</a>
    
    
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 4</a>
  </div>
</div>

<!-- Header -->
<img src="images/banne.jpg" style="width: 100%"> 
<h2 id="son" style="font-family: Cinzel Decorative;color: black;">Sona College of Technology..!</h2>
<p class="hlo">New Platform for Faculty-Advisor</p>
<h1 class="w3-margin w3-jumbo" style="font-family: 'Arya';position: relative;right: -425px;"><i>Sona Faculty Advisor Site</i></h1>
<!--h1 class="w3-margin" style="font-family: 'Farsan';position: relative;right: -425px;font-size: 22px;letter-spacing: 2px;"><i>Welcome Home...!</i></h1!-->
<h1 class="w3-margin" style="font-family: 'Italiana';position: relative;right: -425px;font-size: 22px;letter-spacing: 2px;"><i>Congratulations and welcome to the team..! Follow us now..!</i></h1>
<a href="details.php"><button class="w3-button w3-black w3-padding-large w3-large w3-margin-top"  style="position: relative;right: -685px;" >Store Details</button></a>
<br><br><br><br><br><br><br>

<div id="details">
<div class="container text-center">
  <h3>Details</h3>
  <p><em>We love Faculty satisfaction!</em></p>
  <p>We have created page for individual years..Click the images to Fetch Students Details...!</p>
  <br>
  <div class="row" style="position: absolute;margin-left: 100px;">

    <div class="col-sm-3" >
      <p class="text-center"><strong>1'st Year</strong></p><br>
      <div class="polaroid" >
      <a href="#demo" data-toggle="collapse">
        <a href="fetchone.php" ><img class="img" src="images/img.jpg" class="img-responsive person" alt="Random Name" ></a>
      </a>
      <div id="demo">
        <p style="font-family: 'BenchNine';">Click the Image to Fetch First Year Students Details</p>
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
        <p style="font-family: 'BenchNine';">Click the Image to Fetch Second Year Students Details</p>
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
        <p style="font-family: 'BenchNine';">Click the Image to Fetch Third Year Students Details</p>
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
        <p style="font-family: 'BenchNine';">Click the Image to Fetch Final Year Students Details</p>
      </div>
    </div>
  </div>
  </div>
</div>
</div>
</div><br><br>
  <p style=" font-family: 'Federo';text-align: center;font-size: 20px;position: relative;top: 230px;">Here You Can See Particular Student Details [or] Delete Details....!</p>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
   <p id="vision" style="font-size: 18px;background: -webkit-linear-gradient(gray, black);-webkit-background-clip: text;-webkit-text-fill-color: transparent;position: relative;top:475px;">
<strong style="font-family: Cinzel Decorative;color: black; letter-spacing:10px;font-size: 20px;">VISION:</strong><br>
"To become an institute of great repute,<br> in the fields of Science, Engineering, Technology and<br> Management studies, by offering a full<br> range of programmes of global standard to foster research, <br
>and to transform the students into globally competent personalities."</p>
<p id="mission" style="font-size: 18px;text-align: right;background: -webkit-linear-gradient(black, gray);-webkit-background-clip: text;-webkit-text-fill-color: transparent;position: relative;top: 35px;">
<strong style="font-family: Cinzel Decorative;color: black; letter-spacing: 10px;font-size: 20px;">MISSION:</strong><br>
"Sona College of Technology is a private engineering institution<br> that offers engineering degree programmes at under graduate <br> level and post graduate level, computer applications and<br> management studies at post graduate level and doctoral<br> programmes in the areas of engineering and science<br> and humanities."</p>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding  w3-padding-64 w3-container" style="position: relative;top: -300px;">
  <div class="w3-content">
 <div class="container">
        <h2 style="color: black;">Fetch Details:</h2>
        <p style="color: black;">Enter the Regno to Fetch Details....!</p>
        <form action="partid.php" method="POST">
          <div class="form-group">
             <label>
          <p class="label-txt" style="color: black;" >ENTER STUDENT REGNO ?</p>
          <input type="number" name="regno" id="regno" class="input" required="required" style="width: 250px">
          <div class="line-box" style="width: 250px; height:3px;">
            <div class="line"></div>
          </div>
        </label>
          </div>
          <button type="submit" class="btn btn-secondary" style="border-radius: 4px;">Fetch</button>
        </form>
      </div>
       <div class="container" id="del" style="text-align: right;position: relative;top: 25px;">
        <h2 style="color: black;">Delete Details:</h2>
        <p style="color: black;">Enter the Regno to Delete Records....!</p>
        <form action="partidel.php" method="POST">
          <div class="form-group">
             <label>
          <p class="label-txt" style="color: black;position: absolute;left:750px;" >ENTER STUDENT REGNO ?</p>
          <input type="number" name="regno" id="regno" class="input" required="required" style="width: 250px">
          <div class="line-box" style="width: 250px; height:3px;position: relative;margin-left:700px;">
            <div class="line"></div>
          </div>
        </label>
          </div>
          <button type="submit" class="btn btn-secondary" style="border-radius: 4px;">Delete</button>
        </form>
      </div>
      </div>
</div>


 <a href="Stulist.php"><button id="align" type="button" class="btn btn-secondary btn-lg" style="font-family: 'Cinzel Decorative';position: relative;top: -300px;">Students-List</button></a><br><br><br>

<!-- Container (Contact Section) -->
<div id="contact" class="container" style="text-decoration-style: #DCDCDC;position: relative;bottom: 300px;" >
  <h3 class="text-center">Contact-Student</h3>
  <p class="text-center"><em>We love our Staff's !</em></p>

  <div class="row">
    <div class="col-md-7">
      <p style="color: #808080"><span class="glyphicon glyphicon-comment"></span>  Student?  Drop a note.</p>
      <p style="color: #808080"><span class="glyphicon glyphicon-map-marker "></span> Sona College of Technology,Junction Main Rd, Salem, Tamil Nadu 636005</p>
      <p style="color: #808080"><span class="glyphicon glyphicon-phone "></span> Phone:  91 - 427 - 2443545, 4099999</p>
      <p style="color: #808080"><span class="glyphicon glyphicon-print "></span> Fax:  91 - 427 - 4099888.</p>
      <p style="color: #808080"><span class="glyphicon glyphicon-envelope "></span> Email: info[At]sonatech.ac.in</p>
    </div>
    <form action="feedmail.php" method="post">
    <div class="col-md-50">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required autocomplete="off">
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required autocomplete="off">
        </div>
      </div>
      <textarea class="form-control" id="cmt" name="cmt" placeholder="Comment" rows="5" column="10" autocomplete="off"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </form>
  </div>

  <div class="tab-content">
   
</div>

<img src="images/robo3.png" style="width:825px;position: absolute;margin-bottom:0px;left:200px;">
<script>
  
function about(){
  Swal.fire({
  title: 'About.!',
  text: 'As a Student Developer we have planned to make a small workable Website for Faculty-Advisor and we started learning HTML,CSS,JS mainly and we pooled our idea together we started developing a website but we refered numoures websites in keen on design of our website ,this is how we basically started to Build this Website',
   footer: '<h5 style="font-family: Cinzel Decorative;color: black;"><strong>Kumaran R , IT-C</strong></h5>',
  imageUrl: 'images/abt.png',
  imageWidth:200,
  imageAlt: 'Custom image',
})

}
</script>
</body>
</html>
