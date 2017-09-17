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
$query = "SELECT * FROM question";
$result = mysqli_query($con, $query) or die('error');
$rows = mysqli_fetch_assoc($result);
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
 $subject = $row['scid'];
 $qName = $row['qname'];
 $qBox = $row['qbox'];
 $keyVars = $row['keyvars'];
 $addInfo = $row['addinfo'];
 $work = $row['work'];
setcookie("subject", $subject, time() + 86400);
setcookie("qname", $qName, time() + 86400);
setcookie("qbox", $qBox, time() + 86400);
setcookie("keyvars", $keyVars, time() + 86400);
setcookie("addinfo", $addInfo, time() + 86400);
setcookie("work", $work, time() + 86400);
}

header("Location: askresults.php");

?> 


</html>

