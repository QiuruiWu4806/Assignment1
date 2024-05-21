<?php

$valid_username = "qiurwu";
$valid_password = "pass";

$username = $_REQUEST['username'];
$_SESSION['username'] = $username;
$password = $_REQUEST['password'];

if ($valid_username == $username && $valid_password == $password) {
  $_SESSSION['logged_in'] = true;
  header ('location: /index.php');
} else {

  if (!isset($_SESSION['failed_attempts'])){
    $_SESSION['failed_attempts'] = 1;
  } else {
    $_SESSION['failed_attempts'] ++;
  }

  echo "This is unsuccessful attempt number " . $_SESSION['failed_attempts'];

}

?>