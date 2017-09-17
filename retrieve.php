<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
 <?php
$server_name = "68.178.217.40";
$db_username = "answeritdevl";
$db_password = "Compsci@123";
$db_name = "answeritdevl";
$category = $_POST["subject"];
$con = mysqli_connect($server_name, $db_username, $db_password, $db_name);
$var = mysqli_query($con, "SELECT * FROM `question` WHERE scid='".$category."';");

if(mysqli_connect_errno())
{
	die("Failed to connect to answerit database: " . mysqli_connect_error());
}
print $var;
?> 

<div style="margin-top:25%">
	<p style="text-align:center">Question submitted successfully!</p>
	<div style="margin-left:auto; margin-right:auto; width:200px">
		<a class="btn btn-default" href="askhome.php">Go Back To Your Homepage!</a>
	</div>
</div>

</html>

