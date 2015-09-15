<?php

session_start();

  $con = mysqli_connect("localhost","zacrecom_notes","Southbank2015","zacrecom_notes");

  $username = mysqli_real_escape_string($con, $_POST['username']);
  $password = mysqli_real_escape_string($con, $_POST['password']);

  $sql = "SELECT * FROM users WHERE username = '$username' AND userpass = '$password'";

  $result = mysqli_query($con, $sql) or die(mysqli_error($con));

  $row = mysqli_fetch_array($result);

  $count = mysqli_num_rows($result);

  	if($count==1) {
    $_SESSION['logged_in'] = $username;
    header("location: index.php");
    echo 'true';
  }
  else {
    echo 'false';
  }
 ?>
