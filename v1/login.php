<?php

include_once 'session_handler.php';

include_once 'header.php';
include_once 'authorize.php';

//echo "login.php - ENTER <br/>";

if(!isset($_POST['username'])) {
  //echo "Form has NOT been submitted, showing LoginForm";
  showLoginForm();
} else {
  //echo "Form has been submitted, calling verifyLogin() <br/>";
  verifyLogin();
}

function verifyLogin()
{
  //echo "logincard.php - verifyLogin() - ENTER <br/>";

  if(!isset($_POST['username']) || !isset($_POST['password'])) {
    //TODO Refactor this
    echo "<font color=red>Missing input parameters. Pls specify username and password!</font>";
    return;
  }

  $username = $_POST['username'];
  $password = $_POST['password'];

  //echo "username : $username <br/>";
  //echo "password : $password <br/>";

  /* Simplest implementation for the time being, but it will be replaced with the DB flow */
  if(strcmp($username, $password)==0) {
    //echo "username password match, calling authorize() <br/> ";

    authorize($username);

    global $access;
    $_SESSION['username']=$username;

    $values = array_values( $access );
    //echo var_dump($values). "<br/>";
    //echo "<b>User Type : </b>" .  $values[0] . "<br/>";

    $_SESSION['userType']=$values[0];

    //echo "Access array has the values : " . var_dump($access) . "<br/>";

    // Store the global variable in the session
    $_SESSION['accessArray'] = $access;
    //echo "Access array has the values : " . var_dump($_SESSION['accessArray']) . "<br/>";

    header('Location: welcome.php');
  } else {
    //TODO Refactor this
    $errorMsg = "Invalid credentials. Pls check them and resubmit!";
    $_SESSION['errorMsg']=$errorMsg;
    header('Location: login.php');
    return;
  }
}

function showLoginForm()
{
?>
  <div class="col-md-6">
    <h3>Login Form</h3>
    <?php
      if(isset($_SESSION['errorMsg'])) {
    ?>
        <div class="alert alert-danger" role="alert">
          <?php
            echo $_SESSION['errorMsg'];
            unset($_SESSION['errorMsg']);
          ?>
        </div>
    <?php
      }
      // Check if the 'timeout' parameter exists in the URL
      if (isset($_GET['timeout']) && $_GET['timeout'] === 'true') {
    ?>
        <div class="alert alert-danger" role="alert">
          <?php
            echo "Your session has expired due to inactivity. Please log in again.";
          ?>
        </div>
    <?php
      }
    ?>
      <div class="card">
          <div class="card-body">
              <form id="registrationForm" method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
                  <div class="form-group">
                      <label for="username">
                          Username
                      </label>
                      <input type="text" id="username" name="username" class="form-control"
                             placeholder="Username" value="raghs" required />
                  </div>
                  <div class="form-group">
                      <label for="password">
                          Password
                      </label>
                      <input type="password" id="password" name="password" class="form-control"
                          placeholder="Password" value="raghs" required />
                  </div>
                  <button class="btn btn-primary">
                      Login
                  </button>
              </form>
              <p class="mt-3">
                  Not registered? <a href="#">Create an account</a>
              </p>
          </div>
      </div>
  </div>
<?php
}
include_once 'footer.php';
?>
