<?php
include_once 'inc/global.php';

//echo "authorize.php invoked! <br/>";

function authorize($username)
{
  global $access;

  switch ($username) {
    case 'raghs': //Super User
      array_push($access, "Super User", "Projects", "Finance", "Users");
      break;
    case 'prasanna': //Finance User
      array_push($access, "Finance User", "Finance");
      break;
    case 'Ravindran': //Admin
      array_push($access, "Admin User", "Users");
      break;
    case 'Sathish': //Guest
    case 'Guest':
      array_push($access,"Guest User");
      break;
    default: //To prevent the user from proceeding further
      //array_push($access,"Guest User (UnRegistered)", "Home" , "Contact");
      //TODO Refactor this!
      //echo "<font color=red>Unregistered User. Pls sign up first.</font>";
      $errorMsg = "Unregistered User. Pls sign up first!";
      $_SESSION['errorMsg']=$errorMsg;
      header('Location: login.php');
      return;
      //break;
  }
}

?>
