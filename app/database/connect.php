<?php

$host = 'db4free.net:3306';
$user = 'blog_creativepad';
$pass = 'elsa1234';
$db_name = 'creative_pad';

$conn = new MySQLi($host, $user, $pass, $db_name);

if ($conn->connect_error){
  die('Database connection error: ' . $conn->connect_error);
  
}

// $url = getenv('JAWSDB_URL');
// $dbparts = parse_url($url);
//
// $hostname = $dbparts['host'];
// $username = $dbparts['user'];
// $password = $dbparts['pass'];
// $database = ltrim($dbparts['path'],'/');
//
// // Create connection
// $conn = new mysqli($hostname, $username, $password, $database);
//
// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
//  echo "Connection was successfully established!";

 ?>
