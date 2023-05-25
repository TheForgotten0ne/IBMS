<?php
$database	= 'db7ln932kq5cbf';
$username	= 'gdsrtohjbzmqjh';
$host		= 'ec2-3-214-103-146.compute-1.amazonaws.com';
$password	= 'e804ba4e66bdf8317b2597c3cb8fcc7a2b50754e28c6a16a2d32ff2b2d1c2711';

ini_set('display_errors',1);
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR | E_DEPRECATED | E_STRICT);
// error_reporting(0);

$conn = new mysqli($host,$username,$password,$database);

if($conn->connect_error){
	die("Connection Failed: ". $conn->connect_error());
}

if(!isset($_SESSION)){
	session_start();	
}

if(!isset($_SESSION['username'])){
	header('Location: login.php');
}
  