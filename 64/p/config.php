<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ERROR | E_CORE_ERROR | E_COMPILE_ERROR);


global $port;
global $username;
$port = "22";
$udpport = "7301";
$servername = "localhost";
$username = "adminuser";
$password = "adminpass";
$dbname = "ShaHaN";
date_default_timezone_set("Asia/Tehran");
global $conn;
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}
?>