<?php

//session_start(); // Start the session
if (!isset($_SESSION)) {
    session_start();
}

require_once 'header.php';
?>
<div class="alert alert-info" role="alert">
  Below are the list of users and their roles, configured in the System for the RBAC Implementation.
</div>

<table class="table table-bordered table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">UserName</th>
      <th scope="col">UserType</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>raghs</td>
      <td>Super User</td>
    </tr>
    <tr>
      <td>prasanna</td>
      <td>Finance User</td>
    </tr>
    <tr>
      <td>Ravindran</td>
      <td>Admin User</td>
    </tr>
    <tr>
      <td>Sathish</td>
      <td>Guest User</td>
    </tr>
    <tr>
      <td>Guest</td>
      <td>Guest User</td>
    </tr>
  </tbody>
</table>

<?php

require_once 'footer.php';
?>
