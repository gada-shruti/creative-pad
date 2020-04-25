<?php

$host = 'db4free.net:3306';
$user = 'blog_creativepad';
$pass = 'elsa1234';
$db_name = 'creative_pad';

$conn = new MySQLi($host, $user, $pass, $db_name);

if ($conn->connect_error){
  die('Database connection error: ' . $conn->connect_error);
}
//else{
//  echo "Database connection successful";
//}
 ?>
