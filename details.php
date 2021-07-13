<title>Details</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
 <link rel="icon" id="ico" href="images/icon.jpg">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src=”https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/js/all.min.js”></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Caveat' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Archivo Narrow' rel='stylesheet'>
  <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="bot.php" class="nav-note" style="font-family: 'Archivo Narrow';">Home</a> <span class="mx-2 mb-0">/</span>
             <a  href="#"><strong class="text-black , nav-note" style="font-family: 'Archivo Narrow';">Details</strong></a>
          </div>
        </div>
      </div>
    </div>
<div class="card text" id="bigcrd">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
          <li class="nav-item">
            <a class="nav-link active" href="bot.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="bot.php">Hello</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Have a nice Day....!</a>
          </li>
        </ul>
    </div>
    <br>
    <p style=" font-family: 'Caveat';text-align: center;font-size: 20px;">Fill the Form from<br>Persoan Detail -> CIE Marks & Attendance % -> Certification's & Workshop's -> Co-curricular & Placement Activities</p>
    <div class="row-6">
        <div class="col-sm-6">
            <div class="card" style="width: 18rem;" id="card1">
                <div class="card-body">
                    <h5 class="card-title">Personel Details</h5>
                    <p class="card-text">Store Students Details to Contact them by using this Button.</p>
                    <a href="info.php" class="btn btn-secondary">Click me</a>
                    <a href="infofetch.php" class="btn btn-secondary">Click me to Fetch</a>
                   
                </div>
            </div>
      </div>
            <div class="card" style="width: 18rem;" id="card2">
                <div class="card-body">
                    <h5 class="card-title">CIE Marks & Attendance %</h5>
                    <p class="card-text">Store Students CIE marks and  Percentage using this Button.</p>
                    <a href="cie.php"  class="btn btn-secondary">Click me</a>
                    <a href="ciefetch.php"  class="btn btn-secondary">Click me to Fetch</a>
           
                </div>
            </div>
      </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="card" style="width: 18rem;" id="card3">
                <div class="card-body">
                    <h5 class="card-title">Certification's & Workshop's</h5>
                    <p class="card-text">Update Certifications,Presentation Using this Button.</p>
                    <a href="certi.php" class="btn btn-secondary">Click me</a>
                    <a href="certifetch.php" class="btn btn-secondary">Click me to Fetch</a>
              
                </div>
            </div>
      </div>
            <div class="card" style="width: 18rem;" id="card4">
                <div class="card-body">
                    <h5 class="card-title">Co-curricular & Placement Activities</h5>
                    <p class="card-text">Add students project work done by them by clicking this Button.</p>
                    <a href="coco.php" class="btn btn-secondary">Click me</a>
                    <a href="cocofetch.php" class="btn btn-secondary">Click me to Fetch</a>
   
                </div>
            </div>   
      </div>      
</div>
<style>
    #card1
    {
        position: relative;
        top: 50px;
        left: 132.5px;
        transition: 0.2s;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    #card1:hover {
      -ms-transform: scale(1.1); /* IE 9 */
      -webkit-transform: scale(1.1); /* Safari 3-8 */
      transform: scale(1.1); 
    }
    #card2
    {
        position: relative;
        top: -8.0em;
        left: 465px;
        transition: 0.2s;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
     #card2:hover {
      -ms-transform: scale(1.1); /* IE 9 */
      -webkit-transform: scale(1.1); /* Safari 3-8 */
      transform: scale(1.1); 
    }
    #card3
    {
        position: relative;
        top: -6.5em;
        left: 148px;
        transition: 0.2s;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
     #card3:hover {
      -ms-transform: scale(1.1); /* IE 9 */
      -webkit-transform: scale(1.1); /* Safari 3-8 */
      transform: scale(1.1); 
    }
    #card4
    {
        position: relative;
        top: -6.5em;
        left: 0px;
        transition: 0.2s;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
     #card4:hover {
      -ms-transform: scale(1.1); /* IE 9 */
      -webkit-transform: scale(1.1); /* Safari 3-8 */
      transform: scale(1.1); 
    }
    #bigcrd
    {
        position: relative;
        margin-top:15px;
        margin-bottom: 20px;
        margin-left:300px;
        margin-right:300px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        background-color:  #33FFCC;
    }
</style>