<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $conn = new mysqli('localhost','root','','faculty_advisor');
    if($conn->connect_error){
        echo "$conn->connect_error";
        die("Connection Failed : ". $conn->connect_error);
    }else{ 
        $sql = "insert into feedback (NAME, EMAIL, COMMENT)";
        $sql.=" values('". $name ."','". $email ."','". $comment ."')";
        if(mysqli_query($conn,$sql)){
            header("Location:Home.php");
        }
    }
?>