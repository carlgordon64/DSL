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
$servername = "mysql6.openhost.net.nz";
$username = "dslai_CarlGordon";
$password = "Qt1i0d%9";
$dbname = "dslair36506nz46867_myDatabase";

/*
$servername = "fdb7.biz.nf";
$username = "1989551_db";
$password = "mullamoo2";
$dbname = "1989551_db";
*/
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
</head>
<body id="stylebod">
<!--body below-->
<div id="mechanic"style="width:100%; margin:auto;margin-top:-20px; background-color:#2a035d;">
<div id="welcometint">
        <div id="resizer"style="">
		<div class="row">
<div class="col-sm-12" style="text-align:center; font-size:20px;padding:30px;color:white;">
<p id="webfont_small"style="color:#fff; text-align:center;">DSL Automotive is Hawke’s Bay 
Longest serving authorised BOSCH  workshop</p>
<p id="webfont_tiny"style="color:#fff; text-align:center;">
•  Specialists in diesel and petrol   •  In house chassis Dynamometer   • 
</p>
<p id="service-text"style="color:#fff; text-align:center;">
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
$sql5 = "INSERT INTO email (Firstname,Email,Cellnumber,Details) VALUES ('$firstname','$email','$cellnumber','$details')";
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
	<div class="col-sm-8" id="leftPad">
<p id="webfont_small" style="color:#2a035d">
	DSL Automotive provides professional vehicle servicing and repairs
</p>
<p id="" style="color:#2a035d;font-size:18px;">
Our technicians regularly travel to Australia to train in the ever evolving new technologies that are always emerging in the industry and can provide you and your vehicle the highest quality professional mechanic services.
</p>
<div class="breaker"></div>
     <li>
	Automotive repairs
	    </li>
	    <li>
    Electronic Diagnostics - Diagnosis of vehicle electronics
    </li>
    <li>
    Turbochargers -  Holset IHI and Garrett Authorised Centre
    </li>
    <li>
    Pre purchase engine appraisals 
    </li>
    <li>
    Vehicle Servicing
    </li>
    <li>
    Brake service
    </li>
    <li>
    EFI Fuel Injector Cleaning
    </li>
    <li>
    Mechanical Repairs
    </li>
    <li>
    Maintenance and inspection
    </li>
    <li>
    Petrol injection service
    </li>
    <li>
    Diesel vehicle service
    </li>
    <li>
    Common rail repairs 
    </li>
    <br>
    </div>
<div class="col-sm-4" style="height:auto;">
<div style="background-image:url('img/mechanic-1.png'); margin:auto; width:300px; height:354px;"></div>
</div>
</div>
<div class="col-sm-4" style="height:auto; ">
<div style="background:#000; width:300px; margin:auto;">
<p style="color:#000; background:#fff; padding-top:10px;padding-bottom:10px;">As members of YES (Your Electronic Specialists) DSL Automotive is  certified to diagnose and repair your vehicles electronic problems.</p>
<div style="background:#000; background-image:url('http://www.dslautomotive.co.nz/images/227/90/yes-colour.png?h=a9a01292'); right:0; margin:auto; width:227px; height:90px;"></div>
</div>
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
	Common car part failures that DSL Automotive can fix for you
</p>
<p id="" style="color:#2a035d;font-size:18px;">
Slide show of parts</p>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
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
      <img src="img/part-slide1.png" alt="Chania">
      <div class="carousel-caption">
        <h3>Turbo seal</h3>
        <p>Turbo seal leaking</p>
      </div>
    </div>

    <div class="item">
      <img src="img/part-slide2.png" alt="Chania">
      <div class="carousel-caption">
        <h3>Rail pump</h3>
        <p >Failed common rail pump.</p>
      </div>
    </div>

    <div class="item">
      <img src="img/part-slide3.png" alt="Flower">
      <div class="carousel-caption">
        <h3>Injection pump</h3>
        <p>Water contamination of injection pump.</p>
      </div>
    </div>

    <div class="item">
      <img src="img/part-slide4.png" alt="Flower">
      <div class="carousel-caption">
        <h3>Injector</h3>
        <p>Compression leak around injector.</p>
      </div>
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

</div>
</div>
</div>
</div>
<!-- END MECHANIC SERVICES BODY DIV 2-->
<div class="breaker" style="background:#000; width:85%; margin:auto; margin-top:10px; height:1px; margin-bottom:10px;"></div>

<!--Performance Car Tuning for precision and economy DIV-->
<div class="row" style="width:95%; background:#fff; margin:auto; padding-bottom:10px;">
<div style="background:#fff; margin:auto;width:100%; text-align:left; ">
	<div class="col-sm-12" id="leftPad">
<p id="webfont_small" style="color:#2a035d">
	Performance Car Tuning for precision and economy
</p>
<div class="col-sm-4"><p style="color:#2a035d; font-size:18px;">
	DSL Automotive have Hawke's Bay's only 4wd chassis dynamometer. We can test drive your vehicle under all load conditions without even leaving the workshop. 
</p>
<div class="breaker"></div>
<p style="color:#2a035d; font-size:18px;">
DSL Automotive has partnered with WRC Developments and can offer full tuning facilities for Subaru and Mitsubishi vehicles using EcuTek tuning software also tuning available for Holden, Ford, Chevy, Jeep and Chrysler using HP tuners software.
</p>
<div class="breaker"></div>

<li>Performance Car Tuning</li>
<li>Tune ups</li>


</div>
<div class="col-sm-8"><div style="background-image:url('http://www.dslautomotive.co.nz/images/600/338/dynamometer.jpg?h=09712166'); background-repeat:no-repeat;margin:auto; max-width:600px;width:100%; height:338px;">
	
	<p style="color:#f5e901; font-size:18px; background:rgba(0,0,0,0.8);padding:0px 5px 0px 5px;">
The tuning of your engine has a huge effect on the way your car drives.
</p> 
</div>
</div>
<div class="col-sm-12">
	<p style="color:#2a035d; font-size:18px; padding:20px;">
Or find out more information about DSL Automotive's fuel injection and diesel power upgrades or ARB 4x4 accessories.
</p>
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