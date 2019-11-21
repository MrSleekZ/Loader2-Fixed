<?php
include './config.php';

$cheat = $_POST['cheat'];
$tables = $settings['mybb_usertable'];

if (!empty($cheat)) {
	if ($cheat == "premium") {
		$filename = "premium.dll";
		$handle = fopen($filename, "rb");
		$contents = fread($handle, filesize($filename));
		fclose($handle);
		die(base64_encode($contents));
	}
	elseif ($cheat == "admin") {
		$filename = "admin.dll";
		$handle = fopen($filename, "rb");
		$contents = fread($handle, filesize($filename));
		fclose($handle);
		die(base64_encode($contents));
	}
} 
?>