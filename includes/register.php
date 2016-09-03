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
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else
{
    echo "welcome to DogDash!";
}

if(!empty($_POST['username2']) && !empty($_POST['password2']))
{
    /*$ActiveUsername = mysql_real_escape_string($_POST['username2']);
    $ActivePassword = md5(mysql_real_escape_string($_POST['password2']));
    $ActiveEmail = mysql_real_escape_string($_POST['email2']);
*/
    $ActiveUsername= $_POST['username2'];
$ActiveEmail= $_POST['email2'];
$ActivePassword= $_POST['password2'];

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
     
   <h1>Register</h1>
     
   <p>Please enter your details below to register.</p>
     
    <form method="post" action="register.php" name="registerform" id="registerform">
    <fieldset>
        <label for="username2">Username:</label><input type="text" name="username2" id="username2" /><br />

        <label for="password2">Password:</label><input type="password" name="password2" id="password2" /><br />
        <label for="email2">Email Address:</label><input type="text" name="email2" id="email2" /><br />
        <input type="submit" name="register" id="register" value="Register" />
    </fieldset>
    </form>
     
   
 
</div>
</body>
</html>