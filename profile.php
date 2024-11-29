<?php

include_once 'inc/session_handler.php';

require_once 'inc/header.php';

echo "<h2>Summary</h2>";

$username;
$userType;

if(isset($_SESSION)) {
  $username = $_SESSION['username'];
  $userType = $_SESSION['userType'];
}
?>

<table class="table table-bordered table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">UserName</th>
      <th scope="col">UserType</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $username;?></td>
      <td><?php echo $userType;?></td>
    </tr>
  </tbody>
</table>

<?php

require_once 'inc/footer.php';
?>
