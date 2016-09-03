<!DOCTYPE html>
<html>
<head>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure you wan to delete this dog?');
}
function checkDelete2(){
    return confirm('Are you sure you want to cancel this walk?');
}
</script>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
   <link rel="stylesheet" type="text/css" href="css/style.php"/>
   
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'>

  <link href='https://fonts.googleapis.com/css?family=Roboto:100,300' rel='stylesheet' type='text/css'>
</head>
<body style="padding:0px;">
<!--IF THEY HAVE MORE THAN ONE DOG SHOW THIS BUTTON-->
<?
if($Dogcounter>0){

}
?>
<?php
session_start();
    

$servername = "localhost";
$username = "carlgordon";
$password = "6190";
$dbname = "myDatabase";
$host = 'localhost';
$port = 3306;

$SelectDog= $_SESSION['WalkDog'];
$ActiveUsername = $_SESSION['Username'];
$ActivePassword = $_SESSION['Password'];


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($ActiveUsername==null) {
  echo "<p style='font-size:20px;'>Create an account to get started<p>";
}
$sql3 = "SELECT ID,name,owner,breed,gender,age,pace,personality,places,walks,verified FROM Dogs WHERE owner = '$ActiveUsername' AND verified = 1 ";
$result = $conn->query($sql3);
$num_rows = mysqli_num_rows($result);

echo "<h4>".$num_rows." Dog(s) Signed up</h4>";
echo "
<form method='post' action='book-page.php'>
    <input class='instyle' id='sizer'type='submit' value='Book Walk' />
</form>
    ";

if ($result->num_rows > 0) {
  
  $Dogcounter = $num_rows;

      if ($Dogcounter==2) {
        $switchup = 'both';
        $word = 'another';
        echo "<button class='instyle' id='sizer' >Walk ".$switchup." Dogs</button>";
      }
      elseif($Dogcounter > 2) {
        $switchup2 = 'all';
        $word = 'another';
        echo "<button class='instyle' id='sizer' >Walk ".$switchup2." Dogs</button>";
      }
echo "<form action='includes/Dog-register.php'>
    <input class='instyle' id='sizer'type='submit' value='Add ".$word." Dog' />
</form>";
      //echo "<button onclick='window.location.href=includes/Dog-register.php'  class='instyle' id='sizer' >Add ".$word." Dog</button>";
    // output data of each row
//SCRIPT FOR WORKING OUT CURENT DATE TIME AND SHOWING AVAILABILITY
    if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
      // if isset walk selected dog = dogname
$Dname=$row['name'];
echo "<div class='' style=' text-align:center ; padding:0px; padding-bottom:10px; padding-top:10px;'>
<div class='row dogType widthscale'>
    <div id='dogdata' class='row' style=' padding:0px; background-color:#fff'>
    <div id='dogdata' class='col-sm-12' style=' padding-top:0px; padding-bottom:0px;'><h2>".$row['name']."</h2></div>
    <div id='dogdata' class='col-sm-4' style='padding-top:0px; text-align:center;'><div class='dogitar' id='yourdog'></div></div>
    <div class='col-sm-8' style='background-color:transparent;'>
    <div id='dogdata' class='col-sm-4' style=''><h5>Gender:</h5> <p>".$row['gender']."</p></div>
    <div id='dogdata' class='col-sm-4' style=''><h5>Age:</h5> <p>".$row['age']."</p></div>
    <div id='dogdata' class='col-sm-4' style=''><h5>Breed:</h5> <p>".$row['breed']."</p></div>
     <div id='dogdata' class='col-sm-4' style=''><h5>Pace:</h5> <p>".$row['pace']."</p></div>
     <div id='dogdata' class='col-sm-4' style=''><h5>Personality:</h5> <p>".$row['personality']."</p></div>
    <div id='dogdata' class='col-sm-4' style=''><h5>Fav spots:</h5> <p>".$row['places']."</p></div>
    </div>
<div id='dogdata' class='col-sm-12' style='background-color: rgba(0,0,0,0.5); padding:0px;'> 
<form  method='post' action='Profile.php' name='walkform' id='walkform'>
    <input class='instyle' name='walk".$row['name']."' type='submit' value='".$row['walks']." Walks' />
</form>
</div>
</div>
";
 if (isset($_POST["DEL".$Dname.""])) {
 
$DelDog = $Dname;
$sql6 = "DELETE FROM Dogs WHERE name = '$DelDog' AND owner = '$ActiveUsername'  ";
    if ($conn->query($sql6) === TRUE) {
    echo "<p>".$row['name']." has been deleted</p>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}   

    }
//SELECTS ACTIVE DOG FOR WALK STORIES

if (isset($_POST["walk".$row['name'].""])) {

$WalkDog = $row['name'];
$_SESSION['WalkDog'] = $WalkDog;
$Activedog= $_SESSION['WalkDog'];
  ///
// SHOWS RECENT WALK STORIES FOR WALKDOG
$sql4 = "SELECT ID,day,walkdate,location,rating,comment,reviewdate,owner,dog FROM walk_stories WHERE dog='".$row['name']."' AND owner = '$ActiveUsername' ";
$result2 = $conn->query($sql4);
$num_rows = mysqli_num_rows($result2);
if ($result2->num_rows > 0) {
echo "
<h4>$Activedog's Walks</h4>
";
 while($row = $result2->fetch_assoc()) {
echo "
<div class='panel row' style='padding:5px; margin-bottom:10px;'>

<div class='col-sm-6' style='padding:5px;'><p>".$row['comment']."</p></div>
<div class='col-sm-6' style='padding:5px;'><p>".$row['location']."</p>
<p>".$row['day']."</p>
<p>".$row['walkdate']."</p>
</div></div>";
}
}

  }

  ///
$sql4 = "SELECT ID,Day,time_slot,morning,booked,owner,dog,confirm FROM time_slots WHERE dog='".$row['name']."' AND owner = '$ActiveUsername' AND booked = 1 ";
$result2 = $conn->query($sql4);
$num_rows = mysqli_num_rows($result2);


if ($result2->num_rows > 0) {
echo "<h4>Booked Walks</h4>";
  while($row = $result2->fetch_assoc()) {
    $morningcheck=$row['morning'];
if($morningcheck==1){
$AMorPM ='morning';
}else{
  $AMorPM ='afternoon';
}

echo "
<form method='post' onsubmit='return checkDelete2()' action='Profile.php' >
    <input class='instyle' type='submit'name='DELwalk$Activedog'  value='Cancel Walk' />
</form>
    <div id='dogdata' class='col-sm-12' style=''> <p>- ".$row['Day'].", ".$row['time_slot']." in the $AMorPM</p></div>

";
}
if (isset($_POST["DELwalk$Activedog"])) {
echo "walk deleted";
 $sql = "UPDATE time_slots SET booked = 0 WHERE owner = '$ActiveUsername' AND dog = '$Activedog' ";
           if ($conn->query($sql) === TRUE) {
    echo "<p>Success</p>";
    echo "$Activedog";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}   
}
}
echo "<form method='post' onsubmit='return checkDelete()' action='Profile.php' name='DELform' id='DELform'>
    <input class='instyle' type='submit'name='DEL$Dname'  value='Delete $Dname' />
</form>";

echo "
     
    </div>
    <div class='breaker'></div>";
   
      }
    }
    }else{
      echo"<div  class='pholder3'>
    <p style='font-size:18px;'>You haven't added any Dogs! </p>
    </div>";
    }
    

?>
</body>


</html>