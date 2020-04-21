<?php

// $host = 'u3y93bv513l7zv6o.chr7pe7iynqr.eu-west-1.rds.amazonaws.com';
// $user = 'llq4wg4iw14twa45';
// $pass = 'd5tttw65i7pumydd';
// $db_name = 'blog';
//
// $conn = new MySQLi($host, $user, $pass, $db_name);
//
// if ($conn->connect_error){
//   die('Database connection error: ' . $conn->connect_error);
// }

$url = getenv('JAWSDB_URL');
$dbparts = parse_url($url);

$hostname = $dbparts['host'];
$username = $dbparts['user'];
$password = $dbparts['pass'];
$database = ltrim($dbparts['path'],'/');

// Create connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 echo "Connection was successfully established!";

 ?>
