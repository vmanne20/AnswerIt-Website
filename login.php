<?php
$username = $_POST["username"];
$password = $_POST["password"];
$server_name = "68.178.217.40";
$db_username = "answeritdevl";
$db_password = "Compsci@123";
$db_name = "answeritdevl";
$cookie_name = "name";
$con = mysqli_connect($server_name, $db_username, $db_password, $db_name);
$var = mysqli_query($con, "SELECT * FROM `user` WHERE username = '$username' AND password = '$password';");
$row = mysqli_fetch_assoc($var);
$firstName = $row['firstname'];
$lastName = $row['lastname'];
$uid = $row['uid'];
$name = $firstName . ' ' . $lastName;
setcookie($cookie_name, $name, time() + 86400);
setcookie("first", $firstName, time() + 86400);
setcookie("last", $lastName, time() + 86400);
setcookie("user", $uid, time() + 86400);
$checkUsername = mysqli_query($con, "SELECT username from `user` WHERE username ='".$username."';");

if(mysqli_connect_errno())
{
	die("Failed to connect to answerit database: " . mysqli_connect_error());
}
if(mysqli_num_rows($var) > 0)
{
	$customerType = $row['usertype'];
	if($customerType < 2)
	{
		header("Location: askhome.php");
	}
	else
	{
		header("Location: answerhome.php");
	}
}
else
{
	if(mysqli_num_rows($checkUsername) <= 0)
	{
		header("Location: usernameDoesntExist.php");
	}
	else
	{
		header("Location: passwordIncorrect.php");
	}
}
?>