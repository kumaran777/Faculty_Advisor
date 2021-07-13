<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
        session_start();
        $host = "localhost";  
        $user = "root";  
        $password = '';  
        $db_name = "faculty_advisor";  
       
        $regno = $_POST['regno'];

        $con = mysqli_connect($host, $user, $password, $db_name);  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        }

        $query="DELETE FROM info WHERE REG_NO = '$regno' ";
        $result = mysqli_query($con, $query);  
        if($result)
        {
            echo '<script> alert("Data Deleted"); </script>';
            header("Location:Home.php");
        }
        else
        {
            echo '<script> alert("Data Not Deleted"); </script>';
        }
?>

