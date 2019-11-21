<?php
include 'config.php';
$link = mysqli_connect($settings['db_host'],$settings['db_user'],$settings['db_password']);
$database = mysqli_select_db($link,$settings['db_name']);

$user = $_GET['username'];
$hwid = $_GET['hwid'];
$tables = $settings['mybb_usertable'];

// Finding the user for the continuation of this script
$sql = "SELECT * FROM ". $tables ." WHERE username = '". mysqli_real_escape_string($link,$user) ."'" ;
$result = $link->query($sql);

if(strlen($hwid) < 1)
{
	echo "2"; // HWID Empty
}
else
{
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			if (strlen($row['hwid']) > 1)
			{
				if ($hwid != $row['hwid'])
				{
					echo "0"; // Wrong
				}
				else
				{
					echo "1"; // Correct
				}
			}
			else
			{
				$sql = "UPDATE ". $tables ." SET hwid='$hwid' WHERE username='$user'";
				if(mysqli_query($link, $sql))
				{
					echo $row['hwid'];
					echo "3"; // HWID Set
				}
				else
				{
					echo "4"; // Else errors
				}
			}
		}
	}
}

?>

<head>
<title>Checking hwid</title>
</head>
