<?php

function validateUser($user)
{

  $errors = array();

  if(empty($user['username'])){
    array_push($errors, 'Username is required');
  }
  if(empty($user['email'])){
    array_push($errors, 'Email is required');
  }
  if(empty($user['password'])){
    array_push($errors, 'Password is required');
  }
  if (strlen($_POST["password"]) <= 8) {
    array_push($errors, 'Your Password Must Contain At Least 8 Characters!');
    }

  if($user['passwordConf'] !== $user['password']){
    array_push($errors, 'Password do not match');
  }

  //username already $exists
  $existingUsername = selectOne('users',['username' => $user['username']]);
  if ($existingUsername){
    if (isset($user['update-user']) && $existingUsername['id'] != $user['id']) {
      array_push($errors, 'Username already exists');
    }

    if(isset($user['create-admin'])){
      array_push($errors, 'Username already exists');
    }
  }

  //email id already exists
  $existingUser = selectOne('users',['email' => $user['email']]);
  if ($existingUser){
    if (isset($user['update-user']) && $existingUser['id'] != $user['id']) {
      array_push($errors, 'Email already exists');
    }

    if(isset($user['create-admin'])){
      array_push($errors, 'Email already exists');
    }
  }
  return $errors;
}


function validateLogin($user)
{

  $errors = array();

  if(empty($user['username'])){
    array_push($errors, 'Username is required');
  }

  if(empty($user['password'])){
    array_push($errors, 'Password is required');
  }

  return $errors;
}

 ?>
