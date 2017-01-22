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

<body >

<!--body below-->
<div id="jamesjean"style="width:100%;margin-top:-20px; background-color:#1b1f20;">
<div id="welcometint">
	<div class="row">
		<div id="move2"  class="col-sm-12">

		<div style="width:100%; height:477px;">
		<div  class="welcomeDSL">
		<div class="row">
<div class="move4">
        <p id="webfont_small">DSL Automotive knows what it takes to keep your car performing at its peak</p>
        </div>

        <br>
        <div class="move5">
        <p id="webfont_tiny" class='widthscale'style='  margin:auto;'>
        With state-of-the-art diagnostic equipment and Hawke’s Bay’s only 4WD chassis dynamometer
DSL Automotive can provide specialist service
to improve your car's performance.

        </p>
        <div class="second" style="padding:20px;">
         <a id='serviceEnq' style="cursor:pointer;">Make an Enquiry</a>
        </div>
        </div>
</div>
		</div>
		</div></div>
		
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