<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <?php

      if(isset($_POST['Login'])) {
        echo "Form has been submitted!<br/>";
      } else {
        echo "Form has just been freshly loaded and yet to be submitted!<br/>";
      }
      ?>
      <form name="loginForm" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <table class="table table-sm table-bordered table-striped table-hover">
          <thead>
            <tr>
              <th scope="col">Field</th>
              <th scope="col">Value</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
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
          </tbody>
        </table>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
