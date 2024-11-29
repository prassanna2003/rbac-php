<?php

session_start(); // Start the session

require_once 'header.php';
?>
<h2>Version History</h2>

<div class="alert alert-info" role="alert">
  Version History of this RBAC-PHP application is given below.
</div>

<table class="table table-bordered table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Sl #</th>
      <th scope="col">Date</th>
      <th scope="col">Scope</th>
      <th scope="col">Changes</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1.0</td>
      <td>29-Nov-2024 Friday</td>
      <td>Incremental Version</td>
      <td>
          <ul>
              <li>Simplest RBAC in PHP, Bootstrap</li>
              <li>Refactored code with Menu Navbar</li>
              <li>Login, Logout implemented</li>
              <li>UserList, Version History pages added</li>
              <li>Jumbotron, Carousel added</li>
              <li>Session Timeout added</li>
              <li>Features Section added</li>
          </ul>
      </td>
    </tr>
    <tr>
      <td>0.1</td>
      <td>28-Nov-2024 Thursday</td>
      <td>Initial Version</td>
      <td>
          <ul>
              <li>Simplest RBAC in PHP, Bootstrap</li>
              <li>Hardcoded Logic in PHP</li>
              <li>Direct Verification with the simple login form</li>
          </ul>
      </td>
    </tr>
  </tbody>
</table>

<?php

require_once 'footer.php';
?>
