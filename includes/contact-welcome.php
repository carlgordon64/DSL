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

<body >

<!--body below-->
<div style="width:100%;margin-top:-20px; background-color:#fff;">

	<div class="row">
	<div class="col-sm-8" id="leftPad">
		<p id="webfont" style="text-align:center;">
			Contact DSL Automotive
		</p>
<div class="row" style="background:none; padding:0px; text-align:center; font-size:16px;">
<div class="col-sm-6" style="padding:10px;"><p style="font-size:18px;">Phone:</p> <br><p style="color:#1b1f20;">06 843 5287</p></div>
<div class="col-sm-6" style="padding:10px;"><p style="font-size:18px;">Address:</p> <br><p style="color:#1b1f20;">62 Austin Street, Onekawa, Napier</p></div>
<div class="col-sm-6" style="padding:10px;"><p style="font-size:18px;">Hours:</p> <br><p style="color:#1b1f20;">8am - 5pm, Monday - Friday</p></div>
<div class="col-sm-6" style="padding:10px;"><p style="font-size:18px;">Postal Address:</p> <br><p style="color:#1b1f20;">PO Box 3127 Onekawa, Napier</p></div>
<div class="col-sm-12"><br><p>Payment Options:</p><br><img src="http://www.dslautomotive.co.nz/images/297/46/cardsaccepted.jpg?h=8d4f5f85"></div>
</div>
	<br>
	<div class="breaker" style="height:1px; width:95%;"></div>
	<p id="service-text" style="text-align:center; color:#2a035d;">
			DSL Automotive location Map
		</p>
		<!-- GOOGLE MAP API KEY= AIzaSyCIep4uCUwo6SUEXkhMrLtw7atRl1u7RIA -->
		<!-- Declare Key with key=API_KEY -->
		 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIep4uCUwo6SUEXkhMrLtw7atRl1u7RIA&callback=initMap"
  type="text/javascript"></script>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3078.644598422591!2d176.87718828539371!3d-39.499939061249314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d69b3166994b12b%3A0x2e869b741d65580!2sDSL+Automotive!5e0!3m2!1sen!2snz!4v1476584217331" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
	
	<div class="col-sm-4">
		<div style="height:1000px; width:100%; background:#e0e0e0; padding:20px;">
			<p id="webfont_tiny">Make an Enquiry..</p>
		<p style="font-size:16px">
		Fill out the form and we will contact you shortly or call us direct on 06 843 5287 to discuss your requirements
</p>
 <form  method='post' action='About.php'  > 
 <div style="max-width:400px; margin:auto;">
        <input  type='text'style="width:100%;"id='enquireform' name='firstname' placeholder="First Name"> </input><br>
        <input  type='text' style="width:100%;"id='enquireform'name='email'placeholder="Email"> </input><br>
        <input  type='text' style="width:100%;" id='enquireform'name='cellnumber'placeholder="Number"> </input>
       <textarea  style="margin-top:8px; width:100%;" name="details" placeholder="Details"></textarea>
<input  type='submit' id='enquireSub' name='enquireSub'value="Submit"> </input>
<?
if (isset($enquire)){
if (!empty($details)&&!empty($firstname)&&!empty($email)&&!empty($details)){

//INSERT ENQUIRY TO DATABASE
$sql5 = "INSERT INTO DSL_enquiry (Firstname,Email,Cellnumber,Details) VALUES ('$firstname','$email','$cellnumber','$details')";
           if ($conn->query($sql5) === TRUE) {
    echo "<p>Enquiry Recieved<p>";
}
}else{
echo "<p>Please fill out details<p>";
}
}
      ?>
</div>

        </form>
	</div>
		
		
		</div>
		
	</div>





</div>
</body>
<script>
$(function() {
	$( "#item2" ).toggle();
    $( "#serviceEnq" ).click(function() {
    	 $('html,body').animate({
        scrollTop: $(".second").offset().bottom},
        'fast');
     $( "#item2" ).toggle();

    });
});
</script>
</html>