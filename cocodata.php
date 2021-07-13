<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'faculty_advisor');

   
     
 	$regno = $_POST['regno'];
	$a1 = $_POST['a1'];
	$a2 = $_POST['a2'];
	$a3 = $_POST['a3'];
	$a4 = $_POST['a4'];
	$a5 = $_POST['a5'];

        $query = "UPDATE info SET ACTIVITY_1='".$a1."', ACTIVITY_2='".$a2."', ACTIVITY_3='".$a3."', ACTIVITY_4='".$a4."', ACTIVITY_5='".$a5."' WHERE REG_NO='".$regno."'  ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:details.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    
?>