<title>CIE & Att_Info_Store</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href='https://fonts.googleapis.com/css?family=Caveat' rel='stylesheet'>
<link rel="icon" id="ico" href="images/icon.jpg">
<link href='https://fonts.googleapis.com/css?family=Grenze Gotisch' rel='stylesheet'>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

  <script src="js\alert.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"> </script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"> </script>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link href='https://fonts.googleapis.com/css?family=Federo' rel='stylesheet'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<style>
 @media only screen and (max-device-width:540px) {
           .mobileLabel{
   text-align: left;
   }
     .mobilePad{
   margin-left: 4em;
   }
}
@media only screen and (max-device-width:750px) and
    (orientation:landscape) {
.mobileLabel{
   text-align:center;
   }
    .mobilePad{
   margin-left: 80%;
   }
    }
        .boxStyle{
margin-left: 10%;width: 100%;
}

label {
  display: block;
  position: relative;
  margin: 40px 0px;
}
.label-txt {
  position: absolute;
  top: -1.6em;
  padding: 10px;
  font-family: sans-serif;
  font-size: .8em;
  letter-spacing: 1px;
  color: rgb(120,120,120);
  transition: ease .3s;
}
.input {
  width: 100%;
  padding: 10px;
  background: transparent;
  border: none;
  outline: none;
}

.line-box {
  position: relative;
  width: 100%;
  height: 2px;
  background: #BCBCBC;
}

.line {
  position: absolute;
  width: 0%;
  height: 2px;
  top: 0px;
  left: 50%;
  transform: translateX(-50%);
  background: #8BC34A;
  transition: ease .6s;
}
.label-active {
  top: -3em;
}
.input:focus + .line-box .line {
  width: 100%;
}



button {
  display: inline-block;
  padding: 12px 24px;
  background: rgb(220,220,220);
  font-weight: bold;
  color: rgb(120,120,120);
  border: none;
  outline: none;
  border-radius: 3px;
  cursor: pointer;
  transition: ease .3s;
}
button:hover {
  background: #8BC34A;
  color: #ffffff;
}

</style>
<script>
    $(document).ready(function(){

  $('.input').focus(function(){
    $(this).parent().find(".label-txt").addClass('label-active');
  });

  $(".input").focusout(function(){
    if ($(this).val() == '') {
      $(this).parent().find(".label-txt").removeClass('label-active');
    };
  });

});
</script>
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-3 boxStyle" style="padding-right: 0px!important;padding-left: 0px!important;">
		   <div class="panel-body" style="padding-right: 4px!important;padding-left: 4px!important;">
                 <form method="post" name="challenge"  class="form-horizontal" role="form" action="ciedata.php" onSubmit="return submitForm()" AUTOCOMPLETE = "off" >
				<fieldset class="landscape_nomargin" style="min-width: 0;padding:    .35em .625em .75em!important;margin:0 2px;border: 2px solid silver!important;">
			<legend style="border-bottom: none;width: inherit;!important;padding:inherit;font-family: 'Caveat';" class="legend">Fill the CIE marks & Attendance %</legend>
			<i style="font-size:18px" class="fa">&#xf071; Re-Enter all the Data if you'r Updating the Details of Existing Student..</i>
				<label>
				    <p class="label-txt" >ENTER STUDENT REGNO</p>
				    <input type="number" name="regno" id="regno" class="input" required="required">
				    <div class="line-box" style="width: 250px; height:3px;">
				      <div class="line"></div>
				    </div>
			    </label>
 			    <p style=" font-family: 'Federo';">Click the below buttons to store that semester cie marks after entering the mark click the 'Submit' Button</p>
				<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#studentaddmodal">
				                    CLICK ME TO STORE CIE MARKS....!
				</button>
                <br>
                <br>
				<div class="jumbotron">
					<h1 class="display-4">Attendance</h1>
					<p class="lead">Enter the attendance percentage of the semester in the particular field</p>
					<hr class="my-4">
					<div class="card-group">
					  	<div class="card">
					    	<div class="card-body">
					     		<div class="card-header">
					   				 Enter the Semester & Attendance % using (-)..!
					  			</div>
					  			<ul class="list-group list-group-flush">
					  				<input type="text" class="list-group-item" name="at" id="at" placeholder="Attendance % ,Ex : Sem1-98%">
					 			</ul>
					   		</div>
					    </div>
   					</div>
				</div>
				<br>
				<div class="jumbotron">
					<h1 class="display-4">CGPA..!</h1>
					<p class="lead">Enter the CGP of the semester in the particular field</p>
					<hr class="my-4">
				  	<div class="card-group">
				 		<div class="card">
				   			<div class="card-body">
				    			<div class="card-header">
				     				Enter the Semester & CGPA using (-)..!
				  				</div>
				  				<ul class="list-group list-group-flush">
				  					<input type="text" class="list-group-item" name="cg" id="cg" placeholder="CGPA % ,Ex : Sem1-98% (or) 9.8">
				  				</ul>
				      		</div>
				      	</div>
				    </div>
				</div>
				<br>
				<button type="submit" style="font-family: 'Grenze Gotisch';">submit</button>
			</fieldset>
		</form>
	</div>
</div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enter Students Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <form action="ciedata1.php" method="POST">

            <div class="modal-body">
            	<i style="font-size:14px" class="fa">&#xf071; Re-Enter all the Data if you'r Updating the Details of Existing Student..</i>

            	<label>
    <p class="label-txt" >ENTER STUDENT REGNO</p>
    <input type="number" name="regno" id="regno" class="input" required="required">
    <div class="line-box" style="width: 250px; height:3px;">
      <div class="line"></div>
    </div>
  </label>

 				 <div class="form-group">
                  
                    <input type="text"  class="form-control" placeholder="Enter Sem & Cie no,Ex : Sem 1 - cie 1" name="semcie" id="semcie" autocomplete="off">
                </div>

                <div class="form-group">
               
                    <input type="text"  class="form-control" placeholder="Enter Subject name & Mark using(-),Ex : ENG-45" name="submrk1" id="submrk1" autocomplete="off">
                </div>
                 <div class="form-group">
               
                    <input type="text"  class="form-control" placeholder="Enter Subject name & Mark using(-),Ex : MAT-50" name="submrk2" id="submrk2" autocomplete="off">
                </div>


                <div class="form-group">
                
                    <input type="text"  class="form-control" placeholder="Enter Subject name & Mark using(-),Ex : PHY-46" name="submrk3" id="submrk3" autocomplete="off">
                </div>
                 <div class="form-group">
                
                    <input type="text"  class="form-control" placeholder="Enter Subject name & Mark using(-),Ex : CHE-48" name="submrk4" id="submrk4" autocomplete="off">
                </div>
                 <div class="form-group">
                
                    <input type="text"  class="form-control" placeholder="Enter Subject name & Mark using(-),Ex : BEE-39" name="submrk5" id="submrk5" autocomplete="off">
                </div>
                <div class="form-group">
                   
                    <input type="text"  class="form-control" placeholder="Enter Subject name & Mark using(-),Ex : CPR-40" name="submrk6" id="submrk6" autocomplete="off">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="insertdata" class="btn btn-primary">Submit</button>
            </div>
        </form>

    </div>
  </div>
</div>


