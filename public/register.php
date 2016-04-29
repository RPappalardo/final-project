<?php
  require("../includes/databaseconnect.php");
  if($_SERVER["REQUEST_METHOD"]== "GET")
  {
    render("register_form.php",["title"=>"Register"]);
  }
?>
