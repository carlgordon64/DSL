<!DOCTYPE html>
<html>
<head>
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
<link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'>
	 <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 


   <?php
	$dbname ="php118796";
$username ="php118796";
$password ="aed7e9acb05e3f03890a8641687e2259";
$servername ="localhost"; 
$host = "localhost";
//
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
</head>
<body id="stylebod">
<!--body below-->
<div id="ARB"style="width:100%; margin:auto;margin-top:-20px; background-color:#2a035d;">
<div id="welcometint">
        <div id="resizer"style="">
		<div class="row">
<div class="col-sm-12" style="text-align:center; font-size:20px;padding:30px;color:white;">
<p id="webfont_small"style="color:#fff; text-align:center;">Agents for ARB 4x4 accessories, 
DSL Automotive supply and fit premium products </p>
<p id="service-text"style="color:#fff; text-align:center;">
• Bull bars  •  Air Lockers  •  Winches  •  Suspension •  Roof racks  •  Snorkels  •  Shock Absorbers •
</p>
<p id="service-text" style="color:#fff; padding:20px; text-align:center;">
Don’t just fit any shock absorbers, fit ones that have been tuned specifically for your 4x4 vehicle, it will handle better and be safer on and off road.
		</p>
		<form style="padding:20px; ">
		<div class="second">
		        <a id='serviceEnq' style="cursor:pointer;">Make an Enquiry</a>
</div>
		       </form>
		     <h4 style="color:white; font-size:20px;">06 843 5287</h4>
		        </div>
		        </div></div>
		</div>
		</div>
</div>
  <div id='item2' class="first"style="width:100%;max-width:1100px; margin:auto; height:auto; background:#f5e901;" >
<div class="row" style="margin:auto; padding:20px; ">
<div class="col-sm-4">
<div id="teaser-text" style="text-align:left;">
<p id="webfont_tiny" style="color:#2a035d;">Make an enquiry<p>
</div>
<div id="teaser-text" style="text-align:left;">
<p id="service-text" style="color:#2a035d;">DSL Automotive is committed to keeping you in power. Contact us using the following form and we will get back to shortly. Alternatively, you can contact us directly on  06 843 5287 to discuss your requirements.<p>
</div>
<div id="teaser-text" style="text-align:center;"><!-- Button trigger modal -->
<button type="button" style="margin:auto; text-align:center;"class="btn" data-toggle="modal" data-target="#myModal">
  Privacy Policy
</button>
<!-- Button trigger modal end-->
</div>
</div>
<div class="row">
<div class="col-sm-4" style="text-align:center;">
	 <form  method='post' action='index.php'  > 
        <input  type='text'id='enquireform' name='firstname' placeholder="First Name"> </input><br>
        <input  type='text' id='enquireform'name='email'placeholder="Email"> </input><br>
        <input  type='text' id='enquireform'name='cellnumber'placeholder="Number"> </input>
      </div>
<div class="col-sm-4" style="text-align:center;"> 
      <textarea id="styled" style="margin-top:8px;" name="details" placeholder="Details"></textarea>

        <input  type='submit' id='enquireSub' name='enquireSub'value="Submit"> </input>
      </form> 
      <br>
      <?
if (isset($enquire)){
if (!empty($details)&&!empty($firstname)&&!empty($email)&&!empty($details)){

//INSERT ENQUIRY TO DATABASE
$sql5 = "INSERT INTO enquiry (Firstname,Email,Cellnumber,Details) VALUES ('$firstname','$email','$cellnumber','$details')";
           if ($conn->query($sql5) === TRUE) {
    echo "<p>Enquiry Recieved<p>";
}
}else{
echo "<p>Please fill out details<p>";
}
}
      ?>
</div>
</div>
</div>
</div>

<!--MECHANIC SERVICES BODY DIV-->
<div class="row" style="width:100%; background:#fff;  margin:auto; padding-bottom:10px;">
<div style="background:#fff; margin:auto;width:100%; text-align:left; ">
	<div class="col-sm-12" id="leftPad">

<p id="webfont_small" style="color:#2a035d">
	DSL Automotive are Authorised Agents for ARB
</p>

<p id="" style="color:#2a035d;font-size:18px;">
DSL Automotive can supply and install all 4WD products that ASB carry. If we don't have them in stock we can source them overnight for you (subject to availability.)
</p>
<p id="" style="color:#2a035d;font-size:18px;">
ARB is New Zealand's largest supplier of 4×4 accessories with an export network that extends through more than 100 countries around the globe. They are the brand to trust when you are looking for quality, reliability and practicality above all else.
</p>
<p id="" style="color:#2a035d;font-size:18px;">
ARB's products are developed and tested in the harshest outdoor conditions to ensure they are durable and fit for purpose. To see the full range of ARB products click here.
    </p>
    <div class="breaker" style="width:100%;"></div>
    <div id="myCarousel" style="max-width:100%;"class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/gallery1.png" alt="Chania">
      
    </div>

    <div class="item">
      <img src="img/gallery2.png" alt="Chania">
      
    </div>

    <div class="item">
      <img src="img/gallery3.png" alt="Flower">
     
    </div>

    <div class="item">
      <img src="img/gallery4.png" alt="Flower">
     
    </div>

 
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
<!-- ACCESSORIES -->

<div class="col-sm-12" id="leftPad">

<p id="webfont_small" style="color:#2a035d">
	ARB 4x4 Accessories
</p>
<p  style=" font-size:18px; color:#2a035d">
ARB’s engineers have designed an extensive range of accessories and recovery equipment to suit your vehicle and any conditions you may encounter.
</p>
     <li>Bull Bars / Winch Bars</li>
     <li>
    Diff Locks</li>
     <li>
    Recovery Equipment</li>
     <li>
    Jacks
    Battery Systems</li>
     <li>
    Free Wheeling Hubs</li>
     <li>
    Air Compressors</li>
     <li>
    OME Suspension</li>
     <li>
    Safari Snorkels</li>
     <li>
    Air Lockers</li>
     <li>
    Winches electric and hydraulic</li>
     <li>
    Turbochargers</li>
     <li>
    Engel Fridge / Freezers</li>
<div class="breaker"></div>
    <p style="font-size:16px;">For ARB's 2016 online catalogue <a href="http://www.arb.com.au/home/catalogue/">click here.</a>  To contact DSL Automotive for supply and installation of ARB products please  <a href="http://www.arb.com.au/home/catalogue/">enquire here.</a></p>

</div>

</div>
</div>
</div>
</div>

<?
include("includes/modal-exe.php");
?>
</body>
<script>
$(function() {
	$( "#item2" ).toggle();
    $( "#serviceEnq" ).click(function() {
    	 $('html,body').animate({
        scrollTop: $(".second").offset().top},
        'slow');
     $( "#item2" ).toggle();

    });
});
</script>
</html>