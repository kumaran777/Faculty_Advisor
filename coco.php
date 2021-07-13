<title>Co-Curricular_Info_Store</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="icon" id="ico" href="images/icon.jpg">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Caveat' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Grenze Gotisch' rel='stylesheet'>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="js\alert.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href='https://fonts.googleapis.com/css?family=Federo' rel='stylesheet'>

<!------ Include the above in your HEAD tag ---------->
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
   text-align: left;
   }
    .mobilePad{
   margin-left: 11%;
   }
    }
        .boxStyle{
margin-left: 20%;width: 60%;
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
		<div class="col-md-6 col-md-offset-3 boxStyle" style="padding-right: 0px!important;padding-left: 0px!important;">
		   <div class="panel-body" style="padding-right: 4px!important;padding-left: 4px!important;">
                 <form method="post" name="challenge"  class="form-horizontal" role="form" action="cocodata.php" onSubmit="return submitForm()" AUTOCOMPLETE = "off" >
				<fieldset class="landscape_nomargin" style="min-width: 0;padding:    .35em .625em .75em!important;margin:0 2px;border: 2px solid silver!important;">
			<legend style="border-bottom: none;width: inherit;!important;padding:inherit;font-family: 'Caveat';" class="legend">List out the Co-curricular Activities</legend>
       <p style=" font-family: 'Federo';font-size:18px">Enter atleast One Project (or) Workshop Name....!</p>
       <i style="font-size:18px" class="fa">&#xf071; Re-Enter all the Data if you'r Updating the Details of Existing Student..</i>

	 <label>
    
    <p class="label-txt" >ENTER STUDENT REGNO</p>
    <input type="number" name="regno" id="regno" class="input" required="required">
    <div class="line-box" style="width: 250px; height:3px;">
      <div class="line"></div>
    </div>

           <label>
    <p class="label-txt">1</p>
    <input type="text" name="a1" id="a1" class="input" required="required">
    <div class="line-box" style="width: 600px; height:3px;">
      <div class="line"></div>
    </div>
  </label>

          <label>
    <p class="label-txt">2</p>
    <input type="text" name="a2" id="a2" class="input">
    <div class="line-box" style="width: 600px; height:3px;">
      <div class="line"></div>
    </div>
  </label>
           <label>
    <p class="label-txt">3</p>
    <input type="text" name="a3" id="a3" class="input" >
    <div class="line-box" style="width: 600px; height:3px;">
      <div class="line"></div>
    </div>
  </label>
          <label>
    <p class="label-txt">4</p>
    <input type="text" name="a4" id="a5" class="input" >
    <div class="line-box" style="width: 600px; height:3px;">
      <div class="line"></div>
    </div>
  </label>
          <label>
    <p class="label-txt">5</p>
    <input type="text" name="a5" id="a5" class="input">
    <div class="line-box" style="width: 600px; height:3px;">
      <div class="line"></div>
    </div>
  </label>

   <button type="submit" style="font-family: 'Grenze Gotisch';">submit</button>
			</fieldset>
		
				</form>
                </div>
		    </div>
		    
	</div>
</div>
