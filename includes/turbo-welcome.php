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
<div id="turbos"style="width:100%; margin:auto;margin-top:-20px; background-color:#2a035d;">
<div id="welcometint">
        <div id="resizer"style="">
		<div class="row">
<div class="col-sm-12" style="text-align:center; font-size:20px;padding:30px;color:white;">
<p id="webfont_small"style="color:#fff; text-align:center;">Turbochargers - Sales, Service, Performance Tuning, Overhauling</p>
<p id="service-text"style="color:#fff; text-align:center;">
•  Garrett Turbos  •   Holset Turbo  •   Turbochargers NZ  •
</p>
<p id="service-text" style="color:#fff; padding:20px; text-align:center;">
 DSL Automotive are experts when it comes to Turbochargers. For diagnosis, full reconditioning,
upgrading and supply of new turbochargers contact DSL Automotive today. 
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
<div class="row" style="width:100%; background:#fff;  margin:auto; padding-bottom:50px;">
<div style="background:#fff; margin:auto;width:100%; text-align:left; ">
	<div class="col-sm-12" id="leftPad">

<p id="webfont_small" style="color:#2a035d">
	Garrett Turbo - Sales and Service
</p>

<p id="" style="color:#2a035d;font-size:18px;">
Whether you're looking for turbochargers, performance kits, accessories or intercoolers, DSL are your Garrett Turbocharger Authorised Centre of choice. If you are after help to choose the right turbo for your vehicle rely on the experts at DSL Automotive or have a go yourself using the new Garrett Boost Advisor.
</p>

    
    <div class="breaker" style="width:100%;"></div>
    
    <p id="webfont_tiny" style="color:#2a035d; font-size:19px;">
<a href="https://turbobygarrett.com/turbobygarrett/boostadviser">Garrett Boost Adviser</a>
</p>
<p id="" style="color:#2a035d;font-size:18px;">
The Garrett Boost Adviser is a tool developed by Honeywell which helps you identify Garrett turbochargers that meet your goals. It is now available on web, iTunes and Android Market. It is really easy to use. Install the tool, key in a few parameters for your engine and your horsepower goal. In a matter of seconds, the Garrett Boost Adviser will return expected results and recommended Garrett turbochargers. DSL Automotive are approved distributors and installers available fit your matched turbo. You could even email the results to yourself for review or share them on your Facebook page.
</p>
<br>
    <p id="webfont_tiny" style="color:#2a035d; font-size:19px;">
Holset Turbo - Sales of genuine parts and repairs
</p>
<p id="" style="color:#2a035d;font-size:18px;">
Holset turbos are made to highly specific standards to not only to deliver you the power you demand, but also to keep your  engines performing at top efficiency year after year. 
<br>
With correct parts and regular maintenance by DSL Automotive, drivers can depend on the performance and efficiency their vehicles were designed to deliver over the long haul.
</p>
<div class="breaker"></div>
<p id="" style="color:#2a035d;font-size:18px;">
For more information about our turbocharger sales and service or mechanic or fuel injection services contact DSL Automotive today.
</p>
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