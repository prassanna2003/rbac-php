<?php

if(isset($_POST['Login'])) {
  echo "Form has been submitted!<br/>";
} else {
  echo "Form has just been freshly loaded and yet to be submitted!<br/>";
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HTML Form</title>
  </head>
  <body>
    <form name="loginForm" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
      <table border=1 cellspacing="5">
        <tr>
          <th>Field</th>
          <th>Value</th>
        </tr>
        <tr>
          <td>
            Username
          </td>
          <td>
            <input type="text" name="username" value="raghs" placeholder="Username" size="10">
          </td>
        </tr>
        <tr>
          <td>
            Password
          </td>
          <td>
            <input type="password" name="password" value="raghs" placeholder="Password" size="10">
          </td>
        </tr>
        <tr colspan="2">
          <td>
            <input type="submit" name="Login" value="Login"/>
            <input type="reset" name="Reset" value="Reset"/>
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
