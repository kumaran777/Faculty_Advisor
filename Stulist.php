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

        $query="select YEAR,REG_NO,NAME,FATHER_NAME,MOTHER_NAME,MOBILE_NO,FATHER_NO,EMAIL,ADDRESS from info where FACULTY_NAME = '". $_SESSION['facultyname'] ."' ";
        $result = mysqli_query($con, $query);  
?>
<html>
    <head>
        <title>Students_List</title>
            <link rel="icon" href="images/icon.jpg">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://fonts.googleapis.com/css?family=Federo' rel='stylesheet'>
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
            position:absolute;
            margin-left:-645px;
        }
         #align
        {
            position: relative;
            margin-left:21em;
        }
         </style>
    </head>
    <body>
         <div id="invoice">
            <h2 style="text-align: center;font-family: 'Cinzel Decorative'">Students List<h2>
                <div class="container">
            <table class="table table-bordered" style="width: 40%" id="align">
                <thead>
                  <tr>
                    <th style="font-family: 'Federo';width:10%">YEAR</th>
                    <th style="font-family: 'Federo';width:10%">REGNO</th>
                    <th style="font-family: 'Federo';width:20%"> NAME</th>

                   </tr>
                 </thead>
            
    

            </t>
            <?php
                while($rows=mysqli_fetch_assoc($result))
                {?>
                <tbody>
                    <tr style="font-family: 'Archivo Narrow';">
                        <td><?php echo $rows['YEAR'];?></td>
                        <td><?php echo $rows['REG_NO'];?></td>
                        <td><?php echo $rows['NAME'];?></td>

                    
                   </tr>
                </tbody>
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
                filename: 'Students_List.pdf',
                image: { type: 'jpeg', quality: 100.00},
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format:'legal', orientation: 'landscape' }
            };
            html2pdf().from(invoice).set(opt).save();
        })
}
</script>