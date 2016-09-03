<?php include "base.php"; 
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
<link rel="stylesheet" type="text/css" href="./includes/css/style.css."/>
<link rel="stylesheet" type="text/css" href="./includes/css/style.php."/>
   <link href='https://fonts.googleapis.com/css?family=Roboto:100,300' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Nixie+One' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oleo+Script+Swash+Caps:400,700' rel='stylesheet' type='text/css'>

<title>Book Time</title>



</head>  
<body>  
<div id="main" style="text-align:center;">
<?php
session_start();
$SelectDog= $_SESSION['WalkDog'];
$ActiveUsername = $_SESSION['Username'];
$ActivePassword = $_SESSION['Password'];
//$ActiveDog = $_SESSION['SelDog'];

$BookTime= $_POST['Book'];

$SelectTime= $_POST['timeslot'];
$_SESSION['RealTime'] = $_POST['timeslot'];
$RealTime = $_SESSION['RealTime'];
//$RealTime = $_SESSION['RealTime'];

date_default_timezone_set('NZ');
$mydate =  date("d-m-Y") ;

$Actualday =date('l', strtotime($mydate));

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else
{
    echo "hello $ActiveUsername welcome to DashDogs!<br>";

}
if (isset($_POST["submit"])) {
echo "ARE YOU SURE YOU WANT TO CONFRIM RHIS TIME...";
}else{
    echo "SHOW FORM TO SELECT TIME";
}



// define variables and set to empty values
$TimeErr ="";
$SelectTime = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 

  if (isset($_POST["submit"])&&empty($_POST["timesel"])) {
    $TimeErr = "<h4>Please select a time before booking</h4>";
  } else {
    $SelectTime = test_input($_POST["timesel"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>



<form method="post" action="book-page.php">  
 <!--AVAILABILITY DIVISION-->
<div style="width:100%;  margin-top:0px; background-color:#80c332;">
<?

if(isset($_POST['submit'])) {
  //echo "selected Dog: ".htmlspecialchars($_POST['doglist']);
  //$ActiveDog = "".htmlspecialchars($_POST['doglist']);
  //echo "$ActiveDog";
  echo "$SelectDog";
  echo "$ActiveUsername";
  //session_destroy();
}

?>

<div id="welcometint2" style="max-height:800px;
overflow-y:scroll;">
<div  class="widthscale" style="margin:auto; text-align:center;">



    <div class="row" style="text-align:center; padding-top:10px;padding-bottom:10px;">
        
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
echo "<div class='row'><span class='spantext'>Walkability: </span><div class='openIndicator".$row['Available']."''></div></div>
<p style='font-size:18px;'>Today's available times (<strong>Scroll for more</strong>)</p>
";
date_default_timezone_set('NZ');

echo "<p style='font-size:18px;'>";
echo date('l, F jS, Y', strtotime($mydate));
echo "<br>";
echo "</p>";
?>
<!--FORM TO SELECT DOG-->
<h2>Select the Dog you want to book</h2>
   <select name="doglist">
<?

$dogcount=0;
$sql22 = "SELECT ID, name,verified FROM Dogs WHERE owner = '$ActiveUsername' AND verified =1";
$result = $conn->query($sql22);
if ($result->num_rows > 0) {


    // output data of each row
//SCRIPT FOR WORKING OUT CURENT DATE TIME AND SHOWING AVAILABILITY
    while($row = $result->fetch_assoc()) {
      $dogcount++;
        echo "".$row['name']."";
      
        echo "
       <div class='styled-select'>
        <option value='".$row['name']."'>".$row['name']."</option>
</div>
        ";

    }
    
    }
    ?>
</select> 

<!---->

<?
echo "<br>";
/////////// IF SERVICE IS CURRENTLY AVAILABLE -> SHOW TIMESLOTS FOR TODAY
//MORNING TIMES
$sql12 = "SELECT ID, time_slot, Day, morning FROM time_slots WHERE morning = 1 AND booked=0 AND Day = '".$Actualday."' ORDER BY time_slot ASC";
$result = $conn->query($sql12);
if ($result->num_rows > 0) {

    echo "<p style='font-size:20px;background-color:rgba(0,0,0,0.3); padding-bottom:10px;
    padding-top:10px; color:white;'>Morning</p>";

  while($row = $result->fetch_assoc()) {
    //echo "<p>".$row['time_slot']."</p>";

//echo "<label style='font-size:24px; color:#777777; font-family: 'Roboto', sans-serif;'><input type='radio' name='test'>".$row['time_slot']."</label><br>";
echo "<label style='font-size:24px; color:#777777; font-family: 'Roboto', sans-serif;'><input type='radio' name='timesel' "; if (isset($SelectTime) )  echo " value='".$row['time_slot']."'>".$row['time_slot']."</label><br>
";
}
} else {
  echo "<h4>No morning times left today sorry</h4>";
}
////////// AFTERNOON TIMES
$sql12 = "SELECT ID, time_slot, Day, morning,booked FROM time_slots WHERE morning = 0 AND booked=0 AND Day = '".$Actualday."' ORDER BY time_slot ASC";
$result = $conn->query($sql12);
if ($result->num_rows > 0) {

    echo "<p style='font-size:20px;background-color:rgba(0,0,0,0.3); padding-bottom:10px;
    padding-top:10px; color:white;'>Afternoon</p>";
    
    //echo "$Actualday";
  while($row = $result->fetch_assoc()) {
    //echo "<p>".$row['time_slot']."</p>";
   
//echo "<label style='font-size:24px; color:#777777; font-family: 'Roboto', sans-serif;'><input type='radio' name='test'>".$row['time_slot']."</label><br>";
echo "<label style='font-size:24px; color:#777777; font-family: 'Roboto', sans-serif;'><input type='radio' name='timesel' "; if (isset($SelectTime) )  echo " value='".$row['time_slot']."'>".$row['time_slot']."</label><br>";
}
echo "<textarea placeholder='Please write any special pick up instructions or locations' value='specialInstructions' name='specialInstructions'></textarea>";
} else {
    //echo "<br><p style='font-size:18px;'>Sorry we are all booked out today!</p>";
  echo "<br> <h4>No times left this afternoon sorry</h4><br>";
   
}

}
} else {
    echo "<div class='row'><span class='spantext'>Availability: </span><div class='closedIndicator'></div></div>
<p style='font-size:18px;'>Sorry we are closed Today.</p>

";
}if($dogcount>1){
echo "<input class='instyle' type='submit' name='submit' value='Submit'>  ";
    }
//////////

?>
</div>

        </div>

</div>

<!--END AVAILABILITY DIV-->
  <?

  ?>
 <span class="error"><?php echo $TimeErr;?></span>
  <br><br>
  


<?php

$sql5 = "SELECT time_slot, Day, morning FROM time_slots WHERE Day = '".$Actualday."' AND time_slot ='$SelectTime'";
$result = $conn->query($sql5);
if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {

$AmORPm=$row['morning'];
//echo "$AmORPm";
if($AmORPm == 0){
//echo "AFTERNOON";
$timecheck="Afternoon";
    }else{
       //echo "MORNING";
       $timecheck="Morning";
    }
}

}


if (isset($_POST["submit"])) {
  $SpecInstruct=$_POST['specialInstructions'];
  //echo "$ActiveDog";
  //TIME_SLOT TABLE UPDATE
  //echo "$Actualday <br>";
  //echo "$SelectTime <br>";
$submission=1;

 $_SESSION['RealTime'] = $SelectTime;

$sql = " UPDATE time_slots SET booked = 1, owner = '$ActiveUsername', dog= '$ActiveDog',instructions='$SpecInstruct' WHERE Day = '$Actualday' AND time_slot = '$SelectTime'";
           if ($conn->query($sql) === TRUE) {
    echo "<h2>A walk for $ActiveDog has been booked successfully</h2>";
} else {
    echo "Error: NO COMPRENDE" . $sql . "<br>" . $conn->error;
}   
//CONFIRMATION
echo "<div class='well'>";
echo "<p style='color:black; font-size:20px;'>Selected Time Slot: <br>
Walk for $ActiveDog on
<br>$Actualday, $mydate at $SelectTime in the $timecheck?</p>
<div class='breaker'></div>
<h4>Are you sure you'd like to confirm this booking?</h4>
</form>
<input type='submit' class='instyle' name='confirm' value='Confirm Booking'> 
</div>";



}


if (isset($_POST['confirm'])){
echo " ACTUAL DAY: $Actualday <br>";
$RealTime = $_SESSION['RealTime'];
echo " SEL TIME: $RealTime <br>";

  $sql5 = " UPDATE time_slots SET confirm = 1 WHERE Day = '$Actualday' AND time_slot = '$SelectTime'";
           if ($conn->query($sql5) === TRUE) {
    echo "<h2>A walk for $ActiveDog has been booked confirmed</h2>";
} else {
    echo "Error: NO COMPRENDE" . $sql . "<br>" . $conn->error;
} 

}
?>

 
</div>
</body>
</html>