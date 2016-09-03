<!DOCTYPE html>
<html>
<head>
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
<link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'>
	 <?php
	 
$servername = "localhost";
$username = "carlgordon";
$password = "6190";
$dbname = "DSL_db";
$host = 'localhost';
$port = 3306;
session_start();
date_default_timezone_set('NZ');
$mydate =  date("d-m-Y") ;
$Actualday =date('l', strtotime($mydate));
//
$enquire= $_POST['enquireSub'];
$firstname=$_POST['firstname'];
$email=$_POST['email'];
$cellnumber=$_POST['cellnumber'];
$details=$_POST['details'];

//
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
</head>
<body style="margin-top:0px;">
<!--SERVICE TEASERS-->
<div style="width:100%;  margin-top:0px; background-color:#ffffff;">
<div class="row" style="text-align:center; padding-top:20px; padding-bottom:20px;">
	<div class="col-sm-4">
	<div id="service-teaser" style="background-image:url('img/service1.png');">
	</div>
	<input type="submit" action="index.php" value="Mechanic Services" class="enquire"></input>
	<div id="teaser-text">
	<p id="service-text" style=" text-align:left;">
		DSL Automotive can diagnose and repair all vehicle complaints, including hard to find electronic problems. With Hawke's Bay's only 4WD chassis dynamometer your car can be test driven under all load conditions without even leaving the workshop.
		</p>
	</div>
	</div>
	<div class="col-sm-4">
	<div id="service-teaser" style="background-image:url('img/service2.png');"></div>
	<input type="submit" action="index.php" value="Diesel Injection Services" class="enquire"></input>
	<div id="teaser-text">
	<p id="service-text" style=" text-align:left;">
	As authorised dealers of most major fuel injection systems, DSL Automotive supply and fix components quickly and efficiently with nationwide service. Whether it's a ship, or a tractor, if it's fuel injected, we can help.  With expert advice you'll be up and running again in no time.</p>
	</div>
	</div>
	<div class="col-sm-4">
	<div id="service-teaser" style="background-image:url('img/service3.png');"></div>
	<input type="submit" action="index.php" value="ARB 4x4 Accessories " class="enquire"></input>
	
	<div id="teaser-text">
	<p id="service-text"style=" text-align:left;">
	DSL Automotive supply and fit premium ARB 4x4 products and accessories. From Bull bars to snatch traps, ARB products are durable and reliable for the harshest outdoor conditions you can throw at them. Get out exploring knowing you're well equipped for the job. </p>
	</div>
	</div>
</div>
</div>
<!--SERVICE TEASERS-->
<div style="width:100%;  margin-top:0px; background-color:#f5e901;">
<div class="row" style="text-align:center; padding:20px 0px 20px 0px;">
<div class="col-sm-4">
<div id="teaser-text " id="divId" style="text-align:left;">
<p id="webfont_tiny" style="color:#2a035d;">Make an enquiry<p>
</div>
<div id="teaser-text" style="text-align:left;">

<p id="service-text">DSL Automotive is committed to keeping you in power. Contact us using the following form and we will get back to shortly. Alternatively, you can contact us directly on  06 843 5287 to discuss your requirements.<p>
</div>
<div id="teaser-text" style="text-align:left;">
<p id="webfont_tiny" style="color:#2a035d;">Privacy Policy<p>
</div>
</div>
<div class="row" class="first">

<div class="col-sm-4">
	 <form  method='post' action='index.php'  > 
        <input  type='text'id='enquireform' name='firstname' placeholder="First Name"> </input><br>
        <input  type='text' id='enquireform'name='email'placeholder="Email"> </input><br>
        <input  type='text' id='enquireform'name='cellnumber'placeholder="Number"> </input>
      

</div>
<div class="col-sm-4"> 
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
<div class="row" style=" text-align:center; background:#fff; overflow-x:scroll; padding-top:20px;padding-bottom:20px;">
<div style="height:259px; width:1100px; margin:auto;" id="dslfootbanner">
  </div>
  </div>
</body>
<script>
$(function() {
    $( "#serviceEnq" ).click(function() {
    	 window.scrollTo(0, 1000);

    });
});
</script>

</html>