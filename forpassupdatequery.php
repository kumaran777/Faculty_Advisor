
<?php
session_start();
$errors = array();
if(isset($_POST['submit']))
{
    $db=mysqli_connect("localhost","root","","faculty_advisor");
    // Check connection
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    // receive all input values from the form
	$password = mysqli_real_escape_string($db, $_POST['password']);
    if (empty($password))
	{
		array_push($errors, '<div class="alert alert-danger" role="alert">Password is required</div>');
	}
    $query = mysqli_query($db,"SELECT * FROM register WHERE `register`.`email` = '".$_SESSION['gmail']."' ")
    or die(mysqli_error($db)); 

    if (mysqli_num_rows ($query)==1)
    {
        $password = ($password);
        $query3 = mysqli_query($db,"UPDATE register SET `password`='$password' WHERE `register`.`email` = '".$_SESSION['gmail']."' ")
        or die(mysqli_error($db));

        header('Location:Login&Registration.php');
    }
}

?>
