<?php
  require ("includes/databaseconnect.php");
  // User input
  $fname = "";
  $lname = "";
  $email = "";
  $password = "";

  $formError = "";
  // if form submitted
  if (!empty($_POST["submit"]) && $_POST["submit"] == "submit") {
    // TODO Clean variables for SQL queries && fix capitalization
    $fname_cleaned = ucfirst(strtolower(trim($_POST['fname']))); // Strips white space, forces capitalization
    $lname_cleaned = ucfirst(strtolower(trim($_POST['lname'])));
    $email_cleaned = trim(strtolower($_POST['email'])); // Strips white space and removes capitalization
    $password_cleaned = $_POST['password'];
    $password2_cleaned = $_POST['password2'];
    $key = $_POST['key'];
    $isWorking = True;
    // TODO if entries are NOT filled
    if (empty($fname_cleaned) || empty($lname_cleaned) || empty($email_cleaned) || empty($password_cleaned) || empty($password2_cleaned) || empty($key)) {
      $formError = "Please fill out all required fields.";
      $isWorking = False;
    }
    // If not valid registration key
    if ($key != $studentkey && $key != $adminkey){
      $formError = "Invalid registration key.";
      $isWorking = False;
    }
    // if names aren't alphanumeric
    // if(!preg_match("/^[a-zA-Z]$/", $_POST['Fname']) &&
    //    !preg_match("/^[a-zA-Z]$/", $_POST['Lname'])) {
    //  $formError = "Name can only be composed of letters + numbers.";
    //  $isWorking = False;
    // }
    // if email is NOT valid
    // if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $_POST['email']) && $isWorking) {
    //   $formError = "Please enter valid email address.";
    //   $isWorking = False;
    // }
    // If passwords mismatch
    if ($_POST['password'] != $_POST['password2'] && $isWorking) {
      $formError = "Passwords must match.";
      $isWorking = False;
    }
    // Returns # of rows w/ given email
    $emailsearch = mysqli_query($db, "SELECT *
                                        FROM `users`
                                       WHERE `email` = '$email_cleaned'");
    $emailResultNum = mysqli_num_rows($emailsearch);
    if ($emailResultNum != 0 && $isWorking) {
      $formError = "Email already in use, please use another.";
      $isWorking = False;
    }
    $cryptpw = password_hash($_POST["password"], PASSWORD_DEFAULT);
    if ($cryptpw == false){
      $formError = "Failed to encrypt password.";
      $isWorking = False;
    }
    if ($key == $adminkey){
      $is_admin = 1;
    } else {
      $is_admin = 0;
    }
    // Saves info to users database
    if ($isWorking) {
      mysqli_query($db, "INSERT INTO `users` (`fname`, `lname`, `email`, `password`, `is_admin`)
                              VALUES ('$fname_cleaned', '$lname_cleaned', '$email_cleaned', '$cryptpw', '$is_admin')");
      $query = mysqli_query($db, "SELECT *
                                    FROM `users`
                                   WHERE `email` = '$email_cleaned'");
      $userInfo = mysqli_fetch_assoc($query);
      $_SESSION['id'] = $userInfo['id'];
      $_SESSION['email'] = $userInfo["email"];
      $_SESSION['fname'] = $userInfo["fname"];
      $_SESSION['lname'] = $userInfo["lname"];
      $_SESSION['is_admin'] = $userInfo['is_admin'];
      // Insert into profile DB
      $userID = $_SESSION['id'];
      mysqli_query($db, "INSERT INTO `profile` (`id`)
                              VALUES ('$userID')");
      // Insert default privacy settings
      mysqli_query($db, "INSERT INTO `privacy` (`id`, `phone`, `email`,`facebook`,`twitter`, `google`, `linkedin`)
                              VALUES ('$userID', 0, 0, 0, 0, 0, 0)");
      header("location: index.php");
    }
  }
  ?>
