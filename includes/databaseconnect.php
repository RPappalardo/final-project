<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "nul";
  // Create connection
  $link = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // // Storing Session
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
?>
