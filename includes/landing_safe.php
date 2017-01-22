<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
<link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'>
	 <?php
	 
$servername = "localhost";
$username = "carlgordon";
$password = "6190";
$dbname = "myDatabase";
$host = 'localhost';
$port = 3306;

$Subbutton= $_POST['Subbutton'];
$user_email= $_POST['useremail'];
$user_name= $_POST['username'];
$mydate =  date("Y-m-d") ;

$Actualday =date('l', strtotime($mydate));
//
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

</head>
<body style="margin-top:0px;">
<!--body below-->
<!--AVAILABILITY DIVISION-->
<div style="width:100%;  margin-top:0px; background-color:#80c332;">

<div id="welcometint2" style="max-height:300px;
overflow-y:scroll;">
<div style="margin:auto; text-align:center; width:60%;">
	<div class="row" style="text-align:center;">
		
	<?
/////////// WORK OUT IF SERVICE IS CURRENTLY AVAILABLE
$sql12 = "SELECT ID, Available FROM Availability WHERE Available = 1";
$result = $conn->query($sql12);
if ($result->num_rows > 0) {
    // output data of each row
//SCRIPT FOR WORKING OUT CURENT DATE TIME AND SHOWING AVAILABILITY
    while($row = $result->fetch_assoc()) {
    	
//
//
echo "<div class='row'><span class='spantext'>Availability: </span><div class='openIndicator".$row['Available']."''></div></div>
<p style='font-size:18px;'>Today's available times (Scroll for more)</p>

";
echo "<p style='font-size:18px;'>";
echo date('l, F jS, Y', strtotime($mydate));
echo "</p>";
echo "<br>";
}
} else {
    echo "<br> 0 results";
}
//////////
/////////// IF SERVICE IS CURRENTLY AVAILABLE -> SHOW TIMESLOTS FOR TODAY
//MORNING TIMES
$sql12 = "SELECT ID, time_slot, Day, morning FROM time_slots WHERE morning = 1 AND Day = '".$Actualday."' ORDER BY time_slot ASC";
$result = $conn->query($sql12);
if ($result->num_rows > 0) {
	echo "<p style='background-color:rgba(255,255,255,0.3); padding-bottom:10px;
	padding-top:10px;'>Morning</p>";

  while($row = $result->fetch_assoc()) {
  	//echo "<p>".$row['time_slot']."</p>";

echo "<label style='font-size:24px; color:#777777; font-family: 'Roboto', sans-serif;'><input type='radio' name='test'>".$row['time_slot']."</label><br>";

}
} else {
    echo "<br> 0 results";
}
////////// AFTERNOON TIMES
$sql12 = "SELECT ID, time_slot, Day, morning FROM time_slots WHERE morning = 0 AND Day = '".$Actualday."' ORDER BY time_slot ASC";
$result = $conn->query($sql12);
if ($result->num_rows > 0) {
	echo "<p style='background-color:rgba(255,255,255,0.3); padding-bottom:10px;
	padding-top:10px;'>Afternoon</p>";
	
  while($row = $result->fetch_assoc()) {
  	//echo "<p>".$row['time_slot']."</p>";

echo "<label style='font-size:24px; color:#777777; font-family: 'Roboto', sans-serif;'><input type='radio' name='test'>".$row['time_slot']."</label><br>";

}
} else {
    echo "<br> 0 results";
}
?>
</div>
		</div>
</div>
<!--END AVAILABILITY DIV-->
<div style="width:100%; min-height:340px; margin-top:0px; background-color:#fff;">
<div id="welcometint2">
<div style="margin:auto; text-align:center; width:60%;">
	<div class="row" style="text-align:center;">

		
	
		<p style="font-size:40px;">Get your dog the dash they deserve</p>
		</div><br>

		<div class="pholder3"><p style="font-size:18px;">The team at DogDash aim to take the stress out of dog ownership by connecting busy dog owners with dog lovers in their community they can hire on-demand for dog walking or sitting, 7-days a week. DD is like having a trusted dog loving neighbor, or friend at your beck and call! </p></div>
		</div>
		<div class="row" id="dogitars">
		<div class="col-xs-3 "><div class="dogicon" id="dog1">1</div></div>
		<div class="col-xs-3 "><div  class="dogicon" id="dog2" >2</div></div>

		<div class="col-xs-3 "><div class="dogicon" id="dog3">3</div></div>
		<div class="col-xs-3 "><div class="dogicon" id="dog4">4</div></div>
  
		</div><br>
		
	</div>

</div>

<!--NEXT BODY DIVISION-->
<div style="width:100%;  margin-top:0px; background-color:#80c332;">
<div style='border-bottom:5px dotted #fff'></div>
<div id="welcometint2">
<div style="margin:auto; text-align:center; width:60%;">
	<div class="row" style="text-align:center;">
<p style="font-size:40px;">Loved by hundreds of Busy Dog Owners</p>
		
	<?

$sql3 = "SELECT ID, name,location, rating, comment FROM walk_review ORDER BY ID DESC LIMIT 3";
$result = $conn->query($sql3);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
echo "<div class='col-sm-4' style='color: #1b1f20; text-align:center'><b>".$row["name"]."</b><br>".$row["location"]."<br>".$row["rating"]."/10<br>".$row["comment"]."</div>";
   }
} else {
    echo "<br> 0 results";
}

?>

		</div><br>
		<div class="pholder3" style="background:transparent"><p style="font-size:18px;">DogDash makes dog ownership easier by connecting dog owners with dog lovers in their community they can hire on-demand for dog walking, dog sitting, or dog boarding services 7-days a week. DD is like having a trusted dog loving neighbor, or friend at your beck and call! </p></div>
		</div>



		</div>
		<div style='border-bottom:5px dotted #fff'></div>
</div>
<!--NEXT BODY DIVISION-->
<!--HOW IT WORKS-->

<div style="width:100%; margin-top:0px; background-color:#fff; padding-bottom:10px;">
<div id="welcometint2">
<div style="margin:auto; text-align:center; width:60%;">
	<div class="row" style="text-align:center;">
		<p style="font-size:40px;">How it works?</p>
		</div><br>
		<div class="pholder3" style="background:transparent"><p style="font-size:18px;">Order a Walk and one of our Registered Dog Dashers will come take your Dog for a session. Find a Dog Dasher in your area or select one from our registered list of Dog lovers.</p></div>
		</div>
		<div class="row" id="imgholder">
			<div class="col-sm-4"><p>Find a Dog Dasher near You</p>
			<img class="responsive" id="corners" style="border:6px solid #ffdf00; width:100%;"src="http://icons.iconarchive.com/icons/alecive/flatwoken/512/Apps-Google-Maps-icon.png"></div>
			<div class="col-sm-4"><p>Live track your Dog's walk from our website</p>
			<img class="responsive" id="corners" style="border:6px solid #ffdf00; width:100%;" src="http://icons.iconarchive.com/icons/alecive/flatwoken/512/Apps-Google-Maps-icon.png"></div>
            <div class="col-sm-4"><p>Get an activity report after every walk</p>
            <img class="responsive" id="corners" style="border:6px solid #ffdf00; width:100%;" src="http://icons.iconarchive.com/icons/alecive/flatwoken/512/Apps-Google-Maps-icon.png"></div>
</div>
<div class="row" id="imgholder">
<div class="col-sm-4"><p>book an overnight stay</p>
<img class="responsive"  id="corners" style="border:6px solid #ffdf00; width:100%;"src="http://icons.iconarchive.com/icons/alecive/flatwoken/512/Apps-Google-Maps-icon.png"></div>
			<div class="col-sm-4"><p>pick up + drop off available</p>
			<img class="responsive" id="corners" style="border:6px solid #ffdf00; width:100%;" src="http://icons.iconarchive.com/icons/alecive/flatwoken/512/Apps-Google-Maps-icon.png"></div>
            <div class="col-sm-4"><p>Get photo updates of your dog</p>
            <img class="responsive" id="corners" style="border:6px solid #ffdf00; width:100%;" src="http://icons.iconarchive.com/icons/alecive/flatwoken/512/Apps-Google-Maps-icon.png"></div>

    </div>
    <body>
    	<div class="row">
    		<div class="col-sm-3"></div>
    		<div class="col-sm-3"></div>
    		<div class="col-sm-3"></div>
    	</div>
    </body>

		</div>



</div>
<button class="instyle">GET STARTED!</button>
<!--NEXT BODY DIVISION-->
<div style="width:100%; min-height:340px; margin-top:0px; background-color:#80c332;">
<div id="welcometint2">
<div style="margin:auto; text-align:center; width:60%;">
	<div class="row" style="text-align:center;">
		<p style="font-size:40px;">Rest Assured</p>
		</div><br>
		<div class="pholder3" style="background:transparent"><p style="font-size:18px;">Rest easy knowing your dog is in good care with a certified DogoDash pet care professional. Dog walkers and dog sitters on DogoDash have passed a rigorous screening process to become DD Certified including a background check and hands-on assessment. All DD dog care services are bonded and covered by premium pet insurance. </p></div>
		</div>
		</div>
</div>
<!--NEXT BODY DIVISION-->
</body>
</html>