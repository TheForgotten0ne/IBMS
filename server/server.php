<?php
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;


ini_set('display_errors',1);
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR | E_DEPRECATED | E_STRICT);
// error_reporting(0);

$conn = new mysqli($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

if($conn->connect_error){
	die("Connection Failed: ". $conn->connect_error());
}

if(!isset($_SESSION)){
	session_start();	
}

if(!isset($_SESSION['username'])){
	header('Location: login.php');
}
  