<?php
  require("../includes/databaseconnect.php");
  if($_SERVER["REQUEST_METHOD"]== "GET")
  {
    render("register_form.php",["title"=>"Register"]);
  }
  else if($_SERVER["REQUETS_METHOD"]=="POST")
  {
    render("registered.php",["title"=>"Registered"]);
  }
?>
