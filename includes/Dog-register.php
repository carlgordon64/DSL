<?php include "base.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
 
<title>User Management System (Tom Cameron for NetTuts)</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>  
<body>  
<div id="main">
<?php
session_start();
$ActiveUsername = $_SESSION['Username'];
$ActivePassword = $_SESSION['Password'];

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else
{
    echo "welcome to DogDash!";
}

if(!empty($_POST['dogname']) && !empty($_POST['breed']))
{
    /*$ActiveUsername = mysql_real_escape_string($_POST['username2']);
    $ActivePassword = md5(mysql_real_escape_string($_POST['password2']));
    $ActiveEmail = mysql_real_escape_string($_POST['email2']);
*/
    $RegiDogname= $_POST['dogname'];
    $RegiBreed= $_POST['breed'];
    $RegiGender= $_POST['gender'];
    $RegiAge= $_POST['age'];
    $RegiPace= $_POST['pace'];
    $RegiPersonality= $_POST['personality'];
    $RegiPlaces= $_POST['places'];


     
    
     
        echo "<h1>BOOM!</h1>";
        $sql = "INSERT INTO Dogs (name,owner,breed,gender,age,pace,personality,places) VALUES ('$RegiDogname','$ActiveUsername','$RegiBreed','$RegiGender','$RegiAge','$RegiPace','$RegiPersonality','$RegiPlaces')";
           if ($conn->query($sql) === TRUE) {
    echo "<h2>Success!</h2>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}   
     }else{
echo "<p>fill out form</p>";
     }


    ?>
     
   <h1>Register Dog</h1>

   <p>Welcome, <?echo "".$ActiveUsername."";?></p>
     
   <p>Please enter your Dog's details below to register.</p>
     
    <form method="post" action="Dog-register.php" name="registerform" id="registerform">
    <fieldset>
        <label for="dogname">Dog name:</label><input type="text" name="dogname" id="dogname" /><br />
<label for="breed">Breed:</label><input type="text" name="breed" id="breed" /><br />
<label for="gender">Gender:</label><input type="text" name="gender" id="gender" /><br />
<label for="age">Age:</label><input type="text" name="age" id="age" /><br />
<label for="pace">Pace:</label><input type="text" name="pace" id="pace" /><br />
       <label for="personality">Personality:</label><input type="text" name="personality" id="personality" /><br />
<label for="places">Fav spots:</label><input type="text" name="places" id="places" /><br />
        <input type="submit" name="register" id="register" value="Register" />
    </fieldset>
    </form>
     
   
 
</div>
</body>
</html>