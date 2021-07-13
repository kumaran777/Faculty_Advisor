<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
    session_start();
    $year = $_POST['year'];
    $regno = $_POST['regno'];
	$name = $_POST['name'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$no = $_POST['no'];
	$fno = $_POST['fno'];
	$email = $_POST['email'];
	$addr = $_POST['addr'];
	
	// Database connection
	$conn = new mysqli('localhost','root','','faculty_advisor');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$sql = "insert into info(YEAR, REG_NO, NAME, FACULTY_NAME, FATHER_NAME, MOTHER_NAME, MOBILE_NO, FATHER_NO, EMAIL, ADDRESS)";
		$sql.=" values('". $year ."','". $regno ."','". $name ."','". $_SESSION['facultyname'] ."','". $fname ."', '". $mname ."', '". $no ."', '". $fno ."', '". $email ."', '". $addr ."')";
		if(mysqli_query($conn,$sql)){
			header("Location:details.php");
		}

	}
?>

