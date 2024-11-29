<?php

require_once 'header.php';

echo "<h2>Features currently available in the Application</h2>";

?>

<table class="table table-bordered table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Feature</th>
      <th scope="col">Image</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Home Page of the Application</td>
      <td>
        <img src="../images/RBAC-HomePage.png" width="600px" height="300px;" alt="Home Page">
      </td>
      <td>
        The application launches successfully with the default page (Index Page).
      </td>
    </tr>
    <tr>
      <td>Successful Authentication and Authorization</td>
      <td>
        <img src="../images/RBAC-WelcomePage.png" width="600px" height="300px;" alt="Home Page">
      </td>
      <td>
        User has been successfully authenticated and authorized, and shown the Welcome Page
      </td>
    </tr>
    <tr>
      <td>Session Timeout</td>
      <td>
        <img src="../images/RBAC-SessionTimeout.png" width="600px" height="300px;" alt="Home Page">
      </td>
      <td>
        User is redirected to the Login page with a meaningful message after the session gets timed out.
      </td>
    </tr>
  </tbody>
</table>

<?php

require_once 'footer.php';
?>
