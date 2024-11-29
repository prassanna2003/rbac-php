<?php
$username = $_GET['username'];
if(!isset($_GET['username'])) {
  echo "<font color=red>Missing Input parameter - `username`!!!</font>";
  return;
}

$modules = array("Home" => "Home", "Projects" => "Projects", "Finance" => "Finance",
"Users" => "Users", "Contact" => "Contact");

$access = array();

switch ($username) {
  case 'raghs': //Super User
    array_push($access, "Dummy", "Home", "Projects", "Finance", "Users", "Contact");
    break;
  case 'prasanna': //Finance User
    array_push($access, "Dummy", "Home", "Finance", "Contact");
    break;
  case 'Ravindran': //Admin
    array_push($access, "Dummy", "Home", "Users", "Contact");
    break;
  case 'Sathish': //Guest
    array_push($access,"Dummy", "Home" , "Contact");
    break;
  default:
    array_push($access,"Dummy", "Home" , "Contact");
    break;
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
            foreach ($modules as $key => $value) {
              if(array_search($value, $access))
              {
            ?>
                <li><a href="#" class="nav-link px-2"><?php echo $value;?></a></li>
            <?php
              }
            }
          ?>
          <!--<li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
          <li><a href="#" class="nav-link px-2">Home</a></li>
          <li><a href="#" class="nav-link px-2">Projects</a></li>
          <li><a href="#" class="nav-link px-2">Finance</a></li>
          <li><a href="#" class="nav-link px-2">Users</a></li>
          <li><a href="#" class="nav-link px-2">Contact</a></li>-->
        </ul>

        <div class="col-md-3 text-end">
          <button type="button" class="btn btn-outline-primary me-2">Login</button>
          <button type="button" class="btn btn-primary">Sign-up</button>
        </div>
      </header>
      <?php
        echo "<h1>Simplest RBAC Demo</h1>";

        echo "<h2>Summary</h2>";

        echo "<b>Username : </b> $username <br/>";
        echo "<b>Modules accessible : </b><br/>";
        echo "<pre>" , print_r($access) , "</pre><br/>";
      ?>
      <?php
        foreach ($modules as $key => $value) {
          echo "$key, $value <br/>";
          if(array_search($value, $access)) {
            echo "Value $value is present in the Access array!<br/>";
          } else {
            echo "Value $value is <u>NOT</u> present in the Access array!<br/>";
          }
        }
      ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
