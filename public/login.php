<?php
  require("../includes/databaseconnect.php");
  if($_SERVER["REQUEST_METHOD"]== "GET")
  {
    render("login_form.php",["title"=>"Login"]);
  }
  else if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    render("loggedin.php",["title"=>"Loggedin"]);
  }
?>
