<?php

if(!isset($_GET['username']) || !isset($_GET['password'])) {
  echo "<font color=red>Missing input parameters. Pls specify username and password!</font>";
  return;
}

$username = $_GET['username'];
$password = $_GET['password'];

echo "Username : $username <br/>";
echo "Password : $password <br/>";

if(strcmp($username, $password)==0) {
  echo "The strings - $username and $password match!";
} else {
  echo "The strings - $username and $password <b>do NOT</b> match!";
}
?>
