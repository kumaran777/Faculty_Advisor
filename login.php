<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
    session_start();
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "faculty_advisor";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }

    $userid=$_POST['userid'];
    $password=$_POST['password'];

    //to prevent from mysqli injection  
    $userid = stripcslashes($userid);  
    $password = stripcslashes($password);  
    $userid = mysqli_real_escape_string($con, $userid);  
    $password = mysqli_real_escape_string($con, $password);  
  
    $sql = "select *from register where userid = '$userid' and password = '$password'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);
    if($count == 1){  
        $_SESSION['facultyname']=$_POST['userid'];
        // Display the alert box  
        $_SESSION['status']="Login successful ";
        $_SESSION['status_code']="success";
        #header('Location: index.html');
      #  swal('Congratulations!', 'Your message has been succesfully sent', 'success');
    }  
    else{  
        $_SESSION['status']="Login Failed";
        $_SESSION['status_code']="warning";
       # echo "<h1> Login failed. Invalid username or password.</h1>";  
    }
    if( $_SESSION['status_code']=="success"){
        header('Location:bot.php');
    }
    else{
        include ('Login&Registration.php');
        }    
?>