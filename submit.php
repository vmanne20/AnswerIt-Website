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
$con = mysqli_connect($server_name, $db_username, $db_password, $db_name);
$first = "";
$last = "";
$uid = ""; 

    
      if(isset($_COOKIE["first"]))
        $first = $_COOKIE["first"];
      if(isset($_COOKIE["last"]))
        $last = $_COOKIE["last"];
      if(isset($_COOKIE["uid"]))
        $user = $_COOKIE["user"];
print $user;
$qname = $_POST["qname"];
$qbox = nl2br($_POST["qbox"]);
$keyvars = nl2br($_POST["keyvars"]);
$work = nl2br($_POST["work"]);
$addinfo = nl2br($_POST["addinfo"]);
$subject = $_POST["subject"];



if(mysqli_connect_errno())
{
	die("Failed to connect to answerit database: " . mysqli_connect_error());
}
else
{

$query = mysqli_query($con, "INSERT INTO question (`userid`, `scid`, `qname`, `qbox`, `keyvars`, `work`, `addinfo`) VALUES ('".$user."', '".$subject."', '".$qname."', '".$qbox."', '".$keyvars."', '".$work."', '".$addinfo."');");
}

?> 

<div style="margin-top:25%">
	<p style="text-align:center">Question submitted successfully!</p>
	<div style="margin-left:auto; margin-right:auto; width:200px">
		<a class="btn btn-default" href="askhome.php">Go Back To Your Homepage!</a>
	</div>
</div>

</html>

