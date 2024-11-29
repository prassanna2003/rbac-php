<?php

echo "<h1>Simplest RBAC Demo</h1>";

$username = "raghs";

$modules = array("Home", "Projects", "Finance", "Users", "Contact");

$access = array();

switch ($username) {
  case 'raghs': //Super User
    array_push($access, "Home", "Projects", "Finance", "Users", "Contact");
    break;
  case 'prasanna': //Finance User
    array_push($access, "Home", "Finance", "Contact");
    break;
  case 'Ravindran': //Admin
    array_push($access, "Home", "Users", "Contact");
    break;
  case 'Sathish': //Guest
    array_push($access,"Home" , "Contacts");
    break;
  default:
    array_push($access,"Home" , "Contacts");
    break;
}

echo "<h2>Summary</h2>";

echo "<b>Username : </b> $username <br/>";
echo "<b>Modules accessible : </b><br/>";
echo "<pre>" , print_r($access) , "</pre>";
?>
