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
?>
