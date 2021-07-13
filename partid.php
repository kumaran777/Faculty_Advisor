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

        $query="select * from info where REG_NO = '$regno'  ";
        $result = mysqli_query($con, $query);  
?>
<html>
    <head>
        <title>Individual_Details</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://fonts.googleapis.com/css?family=Federo' rel='stylesheet'>
        <link rel="icon" id="ico" href="images/icon.jpg">
        <link href='https://fonts.googleapis.com/css?family=Archivo Narrow' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Cinzel Decorative' rel='stylesheet'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
         <link href='https://cdnjs.cloudflare.com/ajax/libs/javascript.util/0.12.12/javascript.util.min.js'/>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="pdf.css" />
    <script src="pdf.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style >
        #download
        {
            position: relative;
            margin-right: .5px;
        }
    </style>
    </head>
    <body>
          <div id="invoice">
        <table align="center" border="-5px" style="width:600px;line-height:40px">
            
                <p colspan="29" style="font-family: 'Cinzel Decorative';align-content: center;"><h2>Personal Details:<h2></p>
            
            <table class="table table-hover"  cellspacing="0"width="100%">
        <?php
                while($rows=mysqli_fetch_assoc($result))
                {?>
            
                        
                    <tr> 
                        <th scope="col" style="font-family: 'Federo';">YEAR</th>
                        <td scope="col"><?php echo $rows['YEAR'];?></td>
                    </tr>
                    <tr>
                        <th scope="col" style="font-family: 'Federo';">REGNO</th>
                        <td scope="col"><?php echo $rows['REG_NO'];?></td>
                    </tr>
                    <tr>
                        <th scope="col" style="font-family: 'Federo';">NAME</th>
                        <td scope="col"><?php echo $rows['NAME'];?></td>
                    </tr>
                    <tr>
                        <th scope="col" style="font-family: 'Federo';">FATHER_NAME</th>
                         <td scope="col"><?php echo $rows['FATHER_NAME'];?></td>
                    </tr>
                    <tr>
                        <th scope="col" style="font-family: 'Federo';">MOTHER_NAME</th>
                        <td scope="col"><?php echo $rows['MOTHER_NAME'];?></td>
                    </tr>
                    <tr>
                        <th scope="col" style="font-family: 'Federo';">MOBILE_NO</th>
                        <td scope="col"><?php echo $rows['MOBILE_NO'];?></td>
                    </tr>
                    <tr>
                        <th scope="col" style="font-family: 'Federo';">FATHER_NO</th>
                        <td scope="col"><?php echo $rows['FATHER_NO'];?></td>
                    </tr>
                    <tr>
                        <th scope="col" style="font-family: 'Federo';">EMAIL</th>
                        <td scope="col"><?php echo $rows['EMAIL'];?></td>
                    </tr>
                    <tr>
                        <th scope="col" style="font-family: 'Federo';">ADDRESS</th>
                        <td scope="col"><?php echo $rows['ADDRESS'];?></td>
                    </tr>
                    <tr>
                        <th scope="col" style="font-family: 'Federo';">SEM_ATTENDANCE</th>
                        <td scope="col"><?php echo $rows['SEM_ATT'];?></td>
                    </tr>
                    <tr>
                        <th scope="col" style="font-family: 'Federo';">SEM_CGP</th>
                        <td scope="col"><?php echo $rows['SEM_CGP'];?></td>
                    </tr>
                    <tr>
                        <th scope="col" style="font-family: 'Federo';">SEM_CIE_NO</th>
                        <td scope="col"><?php echo $rows['SEM_CIE_NO'];?></td>
                    </tr>
                    <tr>
                        <th scope="col" style="font-family: 'Federo';">SUB1_MARK</th>
                        <td scope="col"><?php echo $rows['SUB1_MARK'];?></td>
                    </tr>
                    <tr>
                        <th scope="col" style="font-family: 'Federo';">SUB2_MARK</th>
                        <td scope="col"><?php echo $rows['SUB2_MARK'];?></td>
                    </tr>
                    <tr>
                        <th scope="col" style="font-family: 'Federo';">SUB3_MARK</th>
                        <td scope="col"><?php echo $rows['SUB3_MARK'];?></td>
                    </tr>
                    <tr>
                        <th scope="col" style="font-family: 'Federo';">SUB4_MARK</th>
                        <td scope="col"><?php echo $rows['SUB4_MARK'];?></td>
                    </tr>
                    <tr>
                        <th scope="col" style="font-family: 'Federo';">SUB5_MARK</th>
                        <td scope="col"><?php echo $rows['SUB5_MARK'];?></td>
                    </tr>
                    <tr>
                        <th scope="col" style="font-family: 'Federo';">SUB6_MARK</th>
                        <td scope="col"><?php echo $rows['SUB6_MARK'];?></td>
                    </tr>
                    <tr>
                        <th scope="col" style="font-family: 'Federo';">ACTIVITY_1</th>
                        <td scope="col"><?php echo $rows['ACTIVITY_1'];?></td>
                    </tr>
                    <tr>
                        <th scope="col" style="font-family: 'Federo';">ACTIVITY_2</th>
                        <td scope="col"><?php echo $rows['ACTIVITY_2'];?></td>
                    </tr>
                    <tr>
                        <th scope="col" style="font-family: 'Federo';">ACTIVITY_3</th>
                        <td scope="col"><?php echo $rows['ACTIVITY_3'];?></td>
                    </tr>
                    <tr>
                        <th scope="col" style="font-family: 'Federo';">ACTIVITY_4</th>
                        <td scope="col"><?php echo $rows['ACTIVITY_4'];?></td>
                    </tr>
                    <tr>
                        <th scope="col" style="font-family: 'Federo';">ACTIVITY_5</th>
                        <td scope="col"><?php echo $rows['ACTIVITY_5'];?></td>
                    </tr>
                    <tr>
                        <th scope="col" style="font-family: 'Federo';">CERTIFICATE_1</th>
                        <td scope="col"><?php echo $rows['CERTIFICATE_1'];?></td>
                    </tr>
                    <tr>
                        <th scope="col" style="font-family: 'Federo';">CERTIFICATE_2</th>
                        <td scope="col"><?php echo $rows['CERTIFICATE_2'];?></td>
                    </tr>
                    <tr>
                        <th scope="col" style="font-family: 'Federo';">CERTIFICATE_3</th>
                        <td scope="col"><?php echo $rows['CERTIFICATE_3'];?></td>
                    </tr>
                    <tr>
                        <th scope="col" style="font-family: 'Federo';">CERTIFICATE_4</th>
                        <td scope="col"><?php echo $rows['CERTIFICATE_4'];?></td>
                    </tr>
                    <tr>
                        <th scope="col" style="font-family: 'Federo';">CERTIFICATE_5</th>
                        <td scope="col"><?php echo $rows['CERTIFICATE_5'];?></td>
                    <tr>
                         
            <?php    }?>
        
        </table>
    </div>
    </body>
</div>
</html>

  <div class="col-md-12 text-right mb-3">
                <button class="btn btn-primary" id="download"><i class="fa fa-download"></i> Download</button>
            </div>
<script>
    window.onload = function () {
    document.getElementById("download")
        .addEventListener("click", () => {
            const invoice = this.document.getElementById("invoice");
            console.log(invoice);
            console.log(window);
            var opt = {
                margin: 1,
                filename: 'Individual_Details.pdf',
                image: { type: 'jpeg', quality: 100.00},
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format:'tabloid', orientation: 'landscape' }
            };
            html2pdf().from(invoice).set(opt).save();
        })
}
</script>
