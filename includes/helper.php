<?php
// define variables and set to empty values
$fnameErr = $lnameErr = $emailErr = $userErr = $passwordErr = "";
$fname = $lname = $email = $user = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["first_name"])) {
    $fnameErr = "Name is required";
  } else {
    $fname = test_input($_POST["first_name"]);
  }

  if (empty($_POST["last_name"])) {
    $lnameErr = "Email is required";
  } else {
    $lname = test_input($_POST["last_name"]);
  }

  if (empty($_POST["user_name"])) {
    $userErr = "";
  } else {
    $user = test_input($_POST["user_name"]);
  }

  if (empty($_POST["password"])) {
    $passwordErr = "";
  } else {
    $password = test_input($_POST["password"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "An E-mail is required";
  } else {
    $email = test_input($_POST["email"]);
  }
}
?>
