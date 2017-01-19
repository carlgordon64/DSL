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
	 $servername = "localhost";
$username = "carlgordon";
$password = "6190";
$dbname = "myDatabase";
$host = 'localhost';
$port = 3306;
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
<div id="injection"style="width:100%; margin:auto;margin-top:-20px; background-color:#2a035d;">
<div id="welcometint">
        <div id="resizer"style="">
		<div class="row">
<div class="col-sm-12" style="text-align:center; font-size:20px;padding:30px;color:white;">
<p id="webfont_small"style=" text-align:center;">Diagnose and repair of performance parts nationwide
Authorised dealer for all major fuel injection manufacturers</p>
<p id="service-text"style="color:#fff; text-align:center;">
•  Specialists in diesel and petrol   •  In house chassis Dynamometer   • 
</p>
<p id="service-text"style="color:#fff; font-size:16px; text-align:center;">
Performing automotive repairs,  electronic diagnostics,  performance car tuning, 
diesel fuel injection, pump and turbocharger installation and  repairs. 
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
<p id="service-text">DSL Automotive is committed to keeping you in power. Contact us using the following form and we will get back to shortly. Alternatively, you can contact us directly on  06 843 5287 to discuss your requirements.<p>
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
	Bosch Diesel Service Centre
</p>
<li>
<p id="" style="color:#2a035d;font-size:18px;">
DSL Automotive is proud to be Hawke's Bay's longest standing Authorised Bosch Service Dealer. With State-of-the-art Bosch test equipment DSL Automotive is able to perform component repair and testing.
</p>
</li>
<li>
<p id="" style="color:#2a035d;font-size:18px;">
Bosch is the biggest car parts manufacturer in the world offering a wide range of vehicle parts and diagnostic equipment. Trust DSL Automotive for expert maintenance and repair of all diesel systems and makes. </p>
    </li>
    
    <div class="breaker" style="width:100%;"></div>
    
    <p id="" style="color:#000; text-align:center;font-size:19px;">
DSL Automotive is certified for Test Bench type BOSCH 815kmm - achieved tooling and testing equipment criteria. 
</div>
</div>
</div>
</div>

<!-- END MECHANIC SERVICES BODY DIV-->
<div class="breaker" style="background:#000; width:85%; margin:auto; margin-top:10px; height:1px; margin-bottom:10px;"></div>
<!--MECHANIC SERVICES BODY DIV-->
<div class="row" style="width:95%; background:#fff; margin:auto; padding-bottom:10px;">
<div style="background:#fff; margin:auto;width:100%; text-align:left; ">
	<div class="col-sm-12" style="padding-left:10px;">
<p id="webfont_small" style="color:#2a035d">
	Steinbauer modules - Diesel power upgrades
</p>
<p id="" style="color:#2a035d;font-size:18px;">
Slide show of parts</p>
<div id="myCarousel" style="max-width:100%;"class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/steinbauer1.png" alt="Chania">
      
    </div>

    <div class="item">
      <img src="img/steinbauer2.png" alt="Chania">
      
    </div>

    <div class="item">
      <img src="img/steinbauer3.png" alt="Flower">
     
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
<p style="font-size:16px; padding:20px; padding-top:10px;">Get up to 20% more torque with a Steinbauer  power enhancement module for passenger vehicles and up to 50% more torque with the Defender Kit Turbo-charger upgrade and improve the performance of your diesel engine.  Steinbauer modules don't change rail pressure, the performance enhancement is achieved by changing the injection duration. This method is the same way the system was originally designed to operate, also allowing precise fuel control throughout the full rpm range of the engine.</p>
</div>
<p style="font-size:16px; text-align:center; padding:20px;">For more information about Steinbauer modules contact DSL Automotive today.</p>
</div>
</div>
</div>
<!-- END MECHANIC SERVICES BODY DIV 2-->
<div class="breaker" style="background:#000; width:85%; margin:auto; margin-top:10px; height:1px; margin-bottom:10px;"></div>
<!--Performance Car Tuning for precision and economy DIV-->
<div class="row" style="width:100%; background:#fff; margin:auto; padding-bottom:10px;">
<div style="background:#fff; margin:auto;width:100%; text-align:left; ">
	<div class="col-sm-12" style="padding-left:10px;">
<p id="webfont_small" style="color:#2a035d">
	Authorised workshop agencies for all main fuel injection manufacturers
</p>
<div class="col-sm-12"><p style="color:#2a035d; font-size:18px;">
DSL Automotive is an Authorised Service Dealer for -</p>
<div class="breaker"></div>
    <li> Bosch </li>
    <li>  Delphi </li>
    <li>  Lucas </li>
    <li>  Denso </li>
    <li>  Zexel  </li>
    <li> Stanadyne </li>


</div>

</div>

<div class="col-sm-12">
<div class="breaker"></div>
	<p style="color:#2a035d; font-size:18px; padding:20px;">
For more information about our diesel fuel injection service or our mechanic and performance tuning services contact DSL Automotive today.</p>
</div>
   </div>
   </div>
    </div>

</div>
</div>
</div>
</div>

<!-- END MECHANIC SERVICES BODY DIV 2-->
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