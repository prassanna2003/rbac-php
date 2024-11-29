<?php

include_once 'session_handler.php';

showRegisterForm();


function showRegisterForm()
{
?>
  <?php
    if(isset($_SESSION['errorMsg'])) {
  ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $_SESSION['errorMsg'];?>
      </div>
  <?php
    }
  ?>
  <div class="col-md-6">
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
?>
