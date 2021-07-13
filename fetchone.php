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

        $query="select * from info where FACULTY_NAME = '". $_SESSION['facultyname'] ."' and YEAR=1 ";
        $result = mysqli_query($con, $query);  
?>
<html>
    <head>
        <title>First-Year-Details</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://fonts.googleapis.com/css?family=Federo' rel='stylesheet'>
         <link rel="icon" id="ico" href="images/icon.jpg">
        <link href='https://fonts.googleapis.com/css?family=Archivo Narrow' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Cinzel Decorative' rel='stylesheet'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <table align="center" border="-5px" style="width:600px;line-height:40px">
            
                <p colspan="29" style="font-family: 'Cinzel Decorative';align-content: center;"><h2>1'st Year Details<h2> <a href="bot.php"><button id="star" type="button" class="btn btn-success" style="font-family: 'Federo';"><i class="fa fa-home"></i>  Go Home....!</button></a></p>
            
            <table class="table table-hover"  cellspacing="0"width="100%">
                
                   <tr> 
                        <th scope="col" style="font-family: 'Federo';">YEAR</th>
                        <th scope="col" style="font-family: 'Federo';">REGNO</th>
                        <th scope="col" style="font-family: 'Federo';">NAME</th>
                        <th scope="col" style="font-family: 'Federo';">FATHER_NAME</th>
                        <th scope="col" style="font-family: 'Federo';">MOTHER_NAME</th>
                        <th scope="col" style="font-family: 'Federo';">MOBILE_NO</th>
                        <th scope="col" style="font-family: 'Federo';">FATHER_NO</th>
                        <th scope="col" style="font-family: 'Federo';">EMAIL</th>
                        <th scope="col" style="font-family: 'Federo';">ADDRESS</th>
                        <th scope="col" style="font-family: 'Federo';">SEM_ATTENDANCE</th>
                        <th scope="col" style="font-family: 'Federo';">SEM_CGP</th>
                        <th scope="col" style="font-family: 'Federo';">SEM_CIE_NO</th>
                        <th scope="col" style="font-family: 'Federo';">SUB1_MARK</th>
                        <th scope="col" style="font-family: 'Federo';">SUB2_MARK</th>
                        <th scope="col" style="font-family: 'Federo';">SUB3_MARK</th>
                        <th scope="col" style="font-family: 'Federo';">SUB4_MARK</th>
                        <th scope="col" style="font-family: 'Federo';">SUB5_MARK</th>
                        <th scope="col" style="font-family: 'Federo';">SUB6_MARK</th>
                        <th scope="col" style="font-family: 'Federo';">ACTIVITY_1</th>
                        <th scope="col" style="font-family: 'Federo';">ACTIVITY_2</th>
                        <th scope="col" style="font-family: 'Federo';">ACTIVITY_3</th>
                        <th scope="col" style="font-family: 'Federo';">ACTIVITY_4</th>
                        <th scope="col" style="font-family: 'Federo';">ACTIVITY_5</th>
                        <th scope="col" style="font-family: 'Federo';">CERTIFICATE_1</th>
                        <th scope="col" style="font-family: 'Federo';">CERTIFICATE_2</th>
                        <th scope="col" style="font-family: 'Federo';">CERTIFICATE_3</th>
                        <th scope="col" style="font-family: 'Federo';">CERTIFICATE_4</th>
                        <th scope="col" style="font-family: 'Federo';">CERTIFICATE_5</th>
                    <tr>
                   
            <?php
                while($rows=mysqli_fetch_assoc($result))
                {?>
            
                        <tr style="font-family: 'Archivo Narrow';">
                            <td scope="col"><?php echo $rows['YEAR'];?></td>
                            <td scope="col"><?php echo $rows['REG_NO'];?></td>
                            <td scope="col"><?php echo $rows['NAME'];?></td>
                            <td scope="col"><?php echo $rows['FATHER_NAME'];?></td>
                            <td scope="col"><?php echo $rows['MOTHER_NAME'];?></td>
                            <td scope="col"><?php echo $rows['MOBILE_NO'];?></td>
                            <td scope="col"><?php echo $rows['FATHER_NO'];?></td>
                            <td scope="col"><?php echo $rows['EMAIL'];?></td>
                            <td scope="col"><?php echo $rows['ADDRESS'];?></td>
                            <td scope="col"><?php echo $rows['SEM_ATT'];?></td>
                            <td scope="col"><?php echo $rows['SEM_CGP'];?></td>
                            <td scope="col"><?php echo $rows['SEM_CIE_NO'];?></td>
                            <td scope="col"><?php echo $rows['SUB1_MARK'];?></td>
                            <td scope="col"><?php echo $rows['SUB2_MARK'];?></td>
                            <td scope="col"><?php echo $rows['SUB3_MARK'];?></td>
                            <td scope="col"><?php echo $rows['SUB4_MARK'];?></td>
                            <td scope="col"><?php echo $rows['SUB5_MARK'];?></td>
                            <td scope="col"><?php echo $rows['SUB6_MARK'];?></td>
                            <td scope="col"><?php echo $rows['ACTIVITY_1'];?></td>
                            <td scope="col"><?php echo $rows['ACTIVITY_2'];?></td>
                            <td scope="col"><?php echo $rows['ACTIVITY_3'];?></td>
                            <td scope="col"><?php echo $rows['ACTIVITY_4'];?></td>
                            <td scope="col"><?php echo $rows['ACTIVITY_5'];?></td>
                            <td scope="col"><?php echo $rows['CERTIFICATE_1'];?></td>
                            <td scope="col"><?php echo $rows['CERTIFICATE_2'];?></td>
                            <td scope="col"><?php echo $rows['CERTIFICATE_3'];?></td>
                            <td scope="col"><?php echo $rows['CERTIFICATE_4'];?></td>
                            <td scope="col"><?php echo $rows['CERTIFICATE_5'];?></td>
                        </tr>
                    
            <?php    }?>
        
        </table>
    </body>
</html>

