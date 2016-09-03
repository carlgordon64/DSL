<?php include "base.php"; ?>
<!DOCTYPE html >
<html>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
 
<title>Profile Settings</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>  
<body>  
<div id="main">
<?php
$updateName=$_POST['newusername'];
$updatePass=$_POST['newpassword'];
$updateEmail=$_POST['newemail'];

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else
{
    echo "welcome to DashDogs Wellington!";
}

if(!empty($_POST['username2']) && !empty($_POST['password2']))
{
    
 echo "<h1>BOOM!</h1>";
        $sql = "INSERT INTO email (useremail,username,password) VALUES ('$ActiveEmail','$ActiveUsername','$ActivePassword')";
           if ($conn->query($sql) === TRUE) {
    echo "<p>Success</p>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}   
     }else{
echo "<p>fill out form</p>";
     }


    ?>
     
   <h1>Account Settings</h1>
     
   <p>Please enter your details below to register.</p>
     
           <?
echo "
<div style='width:100%; background-color:transparent;'>
   <div id='DP' style='width:100%; max-width:360px; margin:auto; height:200px; background-color:grey;'>
   <form action='includes/accept-file.php' method='post' enctype='multipart/form-data'>
    <h4>Your Photo:</h4> <input style='text-align:center; margin:auto;' type='file' name='photo' size='25' />
    <input type='submit'class='instyle' name='submit' value='upload img' />
</form>
   </div>
</div><br>
";

//names:
//username: newusername
//password: newpassword
//email: email2
//description: UserDescription
//location: location
   

?>
<form method="post" action="account-settings.php" name="updateform" id="updateform">
     
<?

$sql3 = "SELECT ID,useremail,username,password,verified,description,location FROM email WHERE username = '$ActiveUsername' AND verified = 1 ";
$result = $conn->query($sql3);
$num_rows = mysqli_num_rows($result);
if ($result->num_rows > 0) {
echo "congrats you have an account";
echo "<h4>$ActiveUsername</h4>";


  while($row = $result->fetch_assoc()) {
    
    $activeID="".$row['ID']."";
    $passlen= "".$row['password']."";
    $ActiveEmail = "".$row['useremail']."";
    //echo strlen($passlen); // 6
    echo "<h4>Account ID=".$activeID."</h4>";
    

echo "
 <fieldset>
        <label for='username2'>Username:</label><input type='text' name='newusername' id='username2' placeholder='$ActiveUsername';/><br />
        <label for='password2'>Password:</label><input type='password' name='newpassword' id='password2' placeholder='*****'/><br />
        <label for='email2'>Email Address:</label><input type='text' name='email2' id='email2' placeholder='".$row['useremail']."'/><br />
        <div class='breaker'></div>
 <label for='email2'>Pick-up Location:</label><input type='text' name='location' id='location' placeholder='".$row['location']."' /><br />
         <div class='breaker'></div>
        <textarea placeholder='Description' value='UserDescription' name='UserDescription'></textarea>
<div class='breaker'></div>
        <input type='submit' class='instyle' name='update' id='update' value='Update' />
    </fieldset>

";

  }
    }

     if (isset($_POST['update'])){
        //UPDATE USERNAME
if(!empty($_POST['newusername']))
{
    echo "<h1>Updated Username from $ActiveUsername to: $updateName</h1>";
$sql2 = "UPDATE email SET username = '$updateName' WHERE ID = '$activeID'";
         if ($conn->query($sql2) === TRUE) {
    echo "<p>Success</p>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}   
     }else{
        echo "No new username";
     }
     //UPDATE PASSWORD
if(!empty($_POST['newpassword']))
{
    echo "<h1>Updated Password from $ActivePassword to: $updatePass</h1>";
$sql3 = "UPDATE email SET password = '$updatePass' WHERE ID = '$activeID'";
         if ($conn->query($sql3) === TRUE) {
    echo "<p>Success</p>";
} else {
    echo "Error: " . $sql3 . "<br>" . $conn->error;
}   
     }else{
        echo "No new password";
     }
//UPDATE EMAIL
     //THIS IS DIFFICULT WITHOUT EMAIL ACTIVE SESSION
if(!empty($_POST['newemail']))
{
    echo "$activeID";
    echo "<h1>Updated Email from old to: $updateEmail</h1>";
$sql4 = "UPDATE email SET useremail = '$updateEmail' WHERE ID = '$activeID'";
         if ($conn->query($sql4) === TRUE) {
    echo "<p>Success</p>";
} else {
    echo "Error: " . $sql4 . "<br>" . $conn->error;
}   
     }else{
        echo "No new email";
     }


 }
        

        ?>
   
    </form>
     
   
 
</div>
</body>
</html>