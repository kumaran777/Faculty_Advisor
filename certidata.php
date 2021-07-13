<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'faculty_advisor');

   
     
        $regno = $_POST['regno'];
        $cone = $_POST['cone'];
        $ctwo = $_POST['ctwo'];
        $cthree= $_POST['cthree'];
        $cfour = $_POST['cfour'];
        $cfive = $_POST['cfive'];

        $query = "UPDATE info SET CERTIFICATE_1='".$cone."', CERTIFICATE_2='".$ctwo."', CERTIFICATE_3='".$cthree."', CERTIFICATE_4='".$cfour."', CERTIFICATE_5='".$cfive."' WHERE REG_NO='".$regno."'  ";
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