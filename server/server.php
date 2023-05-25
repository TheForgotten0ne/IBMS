<?php
// $database	= 'bis';
// $username	= 'root';
// $host		= 'localhost';
// $password	= '';

// ini_set('display_errors',1);
// error_reporting(E_ALL);
// mysqli_report(MYSQLI_REPORT_ERROR | E_DEPRECATED | E_STRICT);
// // error_reporting(0);

// $conn = new mysqli($host,$username,$password,$database);

// if($conn->connect_error){
// 	die("Connection Failed: ". $conn->connect_error());
// }

// if(!isset($_SESSION)){
// 	session_start();	
// }

// if(!isset($_SESSION['username'])){
// 	header('Location: login.php');
// }
//version 2
// $database_url = getenv("postgres://gdsrtohjbzmqjh:e804ba4e66bdf8317b2597c3cb8fcc7a2b50754e28c6a16a2d32ff2b2d1c2711@ec2-3-214-103-146.compute-1.amazonaws.com:5432/db7ln932kq5cbf");
// $db_params = parse_url($database_url);

// $conn = new PDO("pgsql:" . sprintf(
//     "host=%s;port=%s;user=%s;password=%s;dbname=%s",
//     $db_params["ec2-3-214-103-146.compute-1.amazonaws.com"],
//     $db_params["5432"],
//     $db_params["gdsrtohjbzmqjh"],
//     $db_params["e804ba4e66bdf8317b2597c3cb8fcc7a2b50754e28c6a16a2d32ff2b2d1c2711"],
// 	$db_params["db7ln932kq5cbf"],
//     ltrim($db_params["path"], "/")
// ));
// if($conn->connect_error){
// 	die("Connection Failed: ". $conn->connect_error());
// }

// if(!isset($_SESSION)){
// 	session_start();	
// }

// if(!isset($_SESSION['username'])){
// 	header('Location: login.php');
// }

$database_url = $_ENV["DATABASE_URL"];
$db_params = parse_url($database_url);

$conn = new PDO("pgsql:" . sprintf(
    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
    $db_params["host"],
    $db_params["port"],
    $db_params["user"],
    $db_params["pass"],
    ltrim($db_params["path"], "/")
));

if($conn->connect_error){
    die("Connection Failed: ". $conn->connect_error());
}

if(!isset($_SESSION)){
    session_start();    
}

if(!isset($_SESSION['username'])){
    header('Location: login.php');
}

?>