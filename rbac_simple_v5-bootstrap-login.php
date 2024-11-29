<?php

if(isset($_POST['Login'])) {
  //echo "Form has been submitted!<br/>";
  verifyLogin();
} else {
  //echo "Form has just been freshly loaded and yet to be submitted!<br/>";
  //show the login form.
  showLoginForm();
}

function showLoginForm()
{
?>
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
<?php
}

function verifyLogin()
{
  if(!isset($_POST['username']) || !isset($_POST['password'])) {
    echo "<font color=red>Missing input parameters. Pls specify username and password!</font>";
    return;
  }

  $username = $_POST['username'];
  $password = $_POST['password'];

  //echo "Username : $username <br/>";
  //echo "Password : $password <br/>";

  /* Simplest implementation for the time being, but it will be replaced with the DB flow */
  if(strcmp($username, $password)==0) {
    //echo "The strings - $username and $password match!";
    showMenu();
  } else {
    //echo "<font color=red>The strings - $username and $password <b>do NOT</b> match!</font>";
    echo "<font color=red>Invalid credentials. Pls check them and resubmit!</font>";
    return;
  }
}

function showMenu()
{
  //echo "<h1>Bootstrap Menu!</h1>";

  $username = $_POST['username'];
  if(!isset($_POST['username'])) {
    echo "<font color=red>Missing Input parameter - `username`!!!</font>";
    return;
  }

  $modules = array("Home" => "Home", "Projects" => "Projects", "Finance" => "Finance",
  "Users" => "Users", "Contact" => "Contact");

  $access = array();

  switch ($username) {
    case 'raghs': //Super User
      array_push($access, "Super User", "Home", "Projects", "Finance", "Users", "Contact");
      break;
    case 'prasanna': //Finance User
      array_push($access, "Finance User", "Home", "Finance", "Contact");
      break;
    case 'Ravindran': //Admin
      array_push($access, "Admin User", "Home", "Users", "Contact");
      break;
    case 'Sathish': //Guest
    case 'Guest':
      array_push($access,"Guest User", "Home" , "Contact");
      break;
    default: //To prevent the user from proceeding further
      //array_push($access,"Guest User (UnRegistered)", "Home" , "Contact");
      echo "<font color=red>Unregistered User. Pls sign up first.</font>";
      return;
      //break;
  }
?>
  <!doctype html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>PHP RBAC Demo with Bootstrap</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
      <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
          <div class="col-md-3 mb-2 mb-md-0">
            <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
              <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
            </a>
          </div>

          <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <?php
              foreach ($modules as $key => $value)
              {
                if(array_search($value, $access))
                {
              ?>
                  <li><a href="#" class="nav-link px-2"><?php echo $value;?></a></li>
              <?php
                }
              }
            ?>
          </ul>

          <div class="col-md-3 text-end">
            <button type="button" class="btn btn-outline-primary me-2">Login</button>
            <button type="button" class="btn btn-primary">Sign-up</button>
          </div>
        </header>
        <?php
          echo "<h1>Simplest RBAC Demo</h1>";

          echo "<h2>Summary</h2>";

          echo "<b>User Name : </b> $username <br/>";
          //$keys   = array_keys($access);
          //echo var_dump($keys). "<br/>";
          $values = array_values( $access );
          //echo var_dump($values). "<br/>";
          echo "<b>User Type : </b>" .  $values[0] . "<br/>";
        ?>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
  </html>
<?php
}
?>
