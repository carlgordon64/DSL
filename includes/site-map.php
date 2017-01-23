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
			Site Map
		</p>
		<ul id="siteMap">
			<li><p>Home (Automotive Car Service Napier | engine nz car parts 4wd upgrades)</p></li>
			<li><p>About (Automotive Car Service Napier | engine nz car parts 4wd upgrades)</p></li>
			<p>- Testimonials (Auto Mechanic Napier | Car Inspection Services Hawkes Bay)</p>
			<li><p>Mechanic Services (Automotive Car Service Napier | engine nz car parts 4wd upgrades)</p></li>
			<li><p>Diesel Injection (Automotive Car Service Napier | engine nz car parts 4wd upgrades)</p></li>
			<li><p>Turbos (Automotive Car Service Napier | engine nz car parts 4wd upgrades)</p></li>
			<li><p>ARB 4x4 Accessories (Automotive Car Service Napier | engine nz car parts 4wd upgrades)</p></li>

		</ul>
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