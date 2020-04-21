<?php

session_start();
require('connect.php');


function dd($value) //To be deleted (only for development)
{
  echo "<pre>", print_r($value, true), "</pre>";
  die();
}

function executeQuery($sql,$data)
{
  global $conn;
  $stmt = $conn->prepare($sql);
  //To extract all the values using the array method 'array_values' on conditions
  $values = array_values($data); //will give new array only containing values
  $types = str_repeat('s', count($values)); // will take a string and repeat it a number of times eg. if two values then the value of types will be ss, if three values then the value of types will be sss, and so on..
  $stmt->bind_param($types, ...$values); // $types will typecast any variable to its normal type, number of values should be equal to the value of $types. [..$values means spreading the values inside the array seperated by comma. eg. $admin, $username, etc.]
  $stmt->execute();
  return $stmt;
}



function selectAll($table, $conditions = [])
{
  //Global variable
  global $conn;
  //SQL query to select all the records from the table
  $sql = "SELECT * FROM $table";

  if(empty($conditions))
  {
    //Prepare the statement
    $stmt = $conn->prepare($sql);
    //Execute the SQL statement
    $stmt->execute();
    //Return the records
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
  }
  else
  {
    //Return records that match conditions ...
  //  $sql = "SELECT * FROM $table WHERE username = 'Elsa' AND admin =1";
    $i = 0;
    foreach ($conditions as $key => $value) {
      if ($i == 0){
        $sql = $sql . " WHERE $key=?";
      } else {
          $sql = $sql . " AND $key=?";
      }
      $i++;
    }
    $stmt = executeQuery($sql,$conditions);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
  }
}

function selectOne($table, $conditions)
{
  //Global variable
  global $conn;
  //SQL query to select all the records from the table
  $sql = "SELECT * FROM $table";

    $i = 0;
    foreach ($conditions as $key => $value) {
      if ($i == 0){
        $sql = $sql . " WHERE $key=?";
      } else {
          $sql = $sql . " AND $key=?";
      }
      $i++;
    }
    //  $sql = "SELECT * FROM $table WHERE username = 'Elsa' AND admin =1" LIMIT 1;
    $sql = $sql . " LIMIT 1"; // to stop immediately after it finds any matching record
    $stmt = executeQuery($sql,$conditions);
    $records = $stmt->get_result()->fetch_assoc();
    return $records;
}

function create($table,$data)
{
  global $conn;
  //$sql = "INSERT INTO users (username,admin,password) VALUES (?,?,?,?)"
  //$sql = "INSERT INTO users SET username=? ,admin=?, password=?"  (prefer)
  $sql = "INSERT INTO $table SET ";

  $i = 0;
  foreach ($data as $key => $value) {
    if ($i == 0){
      $sql = $sql . " $key=?";
    } else {
        $sql = $sql . ", $key=?";
    }
    $i++;
  }
  $stmt = executeQuery($sql,$data);
  $id = $stmt->insert_id;//id of the inserted record
  return $id;
}

function update($table,$id,$data)
{
  global $conn;
  //$sql = "UPDATE users SET username=? ,admin=?, password=? WHERE id=?"
  $sql = "UPDATE $table SET ";

  $i = 0;
  foreach ($data as $key => $value) {
    if ($i == 0){
      $sql = $sql . " $key=?";
    } else {
        $sql = $sql . ", $key=?";
    }
    $i++;
  }
  $sql = $sql . " WHERE id=?";
  $data['id'] = $id;
  $stmt = executeQuery($sql,$data);
  return $stmt->affected_rows;
}

function delete($table,$id)
{
  global $conn;
  //$sql = "DELETE FROM users WHERE id=?"
  $sql = "DELETE FROM $table WHERE id=?";
  $stmt = executeQuery($sql,['id'=> $id]);
  return $stmt->affected_rows;
}
function getPublishedPosts()
{
   global $conn;
   $sql = "SELECT p.*, u.username FROM posts AS p JOIN users AS u ON p.user_id=u.id WHERE p.published=?";
  $stmt = executeQuery($sql,['published' => 1]);
  $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
  return $records;

}

function getPostsByTopicId($topic_id)
{
  global $conn;

  $sql = "SELECT p.*, u.username FROM posts AS p JOIN users AS u ON p.user_id=u.id WHERE p.published=? AND topic_id=?";

  $stmt = executeQuery($sql,['published' => 1]);
  $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
  return $records;
}
//Not needed
function getTopicPosts($topic_id)
{
  global $conn;

  //SELECT * FROM posts WHERE published = 1
  $sql = "SELECT p.*, u.username FROM posts AS p JOIN users AS u ON p.user_id=u.id WHERE p.published=?";

  $stmt = executeQuery($sql,['published' => 1, 'topic_id' => $topic_id]);
  $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
  return $records;
}

function SearchPosts($term)
{
  $match = '%' . $term . '%';
  global $conn;

  //SELECT * FROM posts WHERE published = 1
  $sql = "SELECT
    p.*, u.username
    FROM posts AS p
    JOIN users AS u
    ON p.user_id=u.id
    WHERE p.published=?
    AND p.title LIKE ? OR p.body LIKE ?";

  $stmt = executeQuery($sql,['published' => 1, 'title' => $match, 'body' => $match]);
  $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
  return $records;
}



?>
