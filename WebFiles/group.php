<?php
include 'config.php';
$link = mysqli_connect($settings['db_host'],$settings['db_user'],$settings['db_password']);
$database = mysqli_select_db($link,$settings['db_name']);

$user = $_GET['username'];
$tables = $settings['mybb_usertable'];

$sql = "SELECT * FROM ". $tables ." WHERE username = '". mysqli_real_escape_string($link,$user) ."'" ;
$result = $link->query($sql);

if ($result->num_rows > 0){
	while($row = $result->fetch_assoc())
	{
		$groups = $row['usergroup'] . $row['additionalgroups'];
		echo $groups;
	}
} 
else
{
	echo "nou"; // User doesn't exist
}
?>

<head>
<title>Checking groups</title>
</head>
