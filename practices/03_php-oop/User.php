<?php

class User
{
  // Properties
  private $username;
  private $password;
  private $role;

  // Methods
  function set_username($username) {
    $this->username = $username;
  }
  function get_username() {
    return $this->username;
  }

  function set_password($password) {
    $this->password = $password;
  }
  function get_password() {
    return $this->password;
  }

  function set_role($role) {
    $this->role = $role;
  }
  function get_role() {
    return $this->role;
  }
}

$user1 = new User();
$user1->set_username("raghs");
$user1->set_password("raghs");
$user1->set_role("SuperUser");

echo $user1->get_username();
echo "<br/>";
echo $user1->get_password();
echo "<br/>";
echo $user1->get_role();
?>
