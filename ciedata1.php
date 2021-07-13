<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'faculty_advisor');

   

	$regno = $_POST['regno'];  
	$semcie = $_POST['semcie'];
	$submrk1 = $_POST['submrk1'];
	$submrk2 = $_POST['submrk2'];
	$submrk3 = $_POST['submrk3'];
	$submrk4 = $_POST['submrk4'];
	$submrk5 = $_POST['submrk5'];
	$submrk6 = $_POST['submrk6'];

        $query = "UPDATE info SET SEM_CIE_NO='". $semcie."', SUB1_MARK='". $submrk1 ."', SUB2_MARK='". $submrk2 ."', SUB3_MARK='". $submrk3 ."', SUB4_MARK='". $submrk4 ."', SUB5_MARK='". $submrk5 ."', SUB6_MARK= '". $submrk6 ."'WHERE REG_NO='".$regno."'  ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:cie.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    
?>

