<?php
$settings = array(
"db_host" => "localhost",
"db_user" => "id3429762_mybb_admin",
"db_password" => "testing123",
"db_name" => "id3429762_mybb",
"mybb_usertable" => "mybb_users"
);

$link = mysqli_connect($settings['db_host'],$settings['db_user'],$settings['db_password']);
$database = mysqli_select_db($link,$settings['db_name']);
?>