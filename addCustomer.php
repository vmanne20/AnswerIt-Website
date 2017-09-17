<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>


<?php
$username = $_POST["username"];
$password = $_POST["password"];
$checkpwd = $_POST["checkpwd"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$phone = $_POST["phone"];
$usertype = $_POST["usertype"];
$server_name = "68.178.217.40";
$db_username = "answeritdevl";
$db_password = "Compsci@123";
$db_name = "answeritdevl";
$canSignUp = false; 
$con = mysqli_connect($server_name, $db_username, $db_password, $db_name);
$var = mysqli_query($con, "SELECT * FROM user WHERE username = '".$username."';");
$site = "";
$cookie_name = "name";
$name = $firstname . ' ' . $lastname;
setcookie($cookie_name, $name, time() + 86400);
if(mysqli_connect_errno())
{
	die("Failed to connect to answerit database: " . mysqli_connect_error());
}
if($password != $checkpwd)
{
	header("Location: passwordsDontMatch.php"); 
}
if(empty($firstname))
{
    header("Location: firstnameRequired.php");
}
if(empty($lastname))
{
    header("Location: lastnameRequired.php");
}
else if(mysqli_num_rows($var) > 0)
{
	header("Location: emailAlreadyExists.php");
}
else if(!isset($_POST["usertype"]))
{
	header("Location: userTypeNotInputted.php"); 
}
else
{
	$query = mysqli_query($con, "INSERT INTO user (`username`, `password`, `firstname`, `lastname`, `phone`, `usertype`) VALUES ('".$username."', '".$password."', '".$firstname."', '".$lastname."', '".$phone."' , '".$usertype."');");
}
?>


<div style="margin-top:25%">
	<p style="text-align:center"> User has now been added! Go back to homepage and login with your new email and password.</p>
	<div style="margin-left:auto; margin-right:auto; width:200px">
		<a class="btn btn-default" href="index.php">Go Back To Homepage!</a>
	</div>
</div>


</html>
