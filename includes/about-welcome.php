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
		<p id="webfont">
			DSL Automotive is the longest standing authorised 
BOSCH Service Centre in the Hawke's Bay
		</p>
<p id="webfont_tiny2" style="color:2a035d">
		For over 35 years DSL Automotive has been committed to keeping you in power
</p>
<p style="font-size:16px;">
	DSL Automotive started in a small workshop in Ahuriri Napier in 1969. We specialised in diesel fuel injection repairs, mainly to the transport and marine industries. In 1979 we moved to Onekawa, Napier to a specially built building and carried on with the highly specialised fuel injection repairs and also added turbochargers to our repertoire. 
</p>

<div style="width:100%; max-width:750px; margin:auto;">
<div id="aboutImg"></div>
	</div>
	<br>
	<p style="font-size:16px;">
	We gained the authorised workshop agencies for all main fuel injection manufacturers, namely, Bosch, Delphi, Lucas, Denso, Zexel and Stanadyne. 
	</p>
	<p style="font-size:16px;">
	After 25 years and many changes in the industry we outgrew our premises and moved across the road to a larger building.   With this move we have also added a 4WD chassis dyno & electronic diagnosis capabilities. 
	</p>
<p style="font-size:16px;">
	As most new diesel vehicles have changed to electronic control we have invested in training and top quality test equipment to keep up to date with today's very highly evolved diesel engines.   We have also changed from only diesel fuel injection repairs to an all round workshop not just specialising in diesel any more but adding petrol injected vehicles as well. 
	</p>
<p id="webfont_tiny" style="color:2a035d">
	Facilities for Performance Tuning 
</p><p style="font-size:16px;">
We have  partnered with WRC Developments and can offer full tuning facilities for Subaru and Mitsubishi vehicles using EcuTek tuning software also tuning available for Holden, Ford, Chevy, Jeep and Chrysler using HP tuners software.
</p>
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