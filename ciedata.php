<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'faculty_advisor');

   
     
 	$regno = $_POST['regno'];
 	$at = $_POST['at'];
	$cg = $_POST['cg'];

        $query = "UPDATE info SET SEM_ATT='".$at."', SEM_CGP='".$cg."'  WHERE REG_NO='".$regno."'  ";
        $query_run = mysqli_query($connection, $query);
        echo $at,$cg;

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