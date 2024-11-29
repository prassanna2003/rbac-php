<?php

include_once 'session_handler.php';

// Retrieve the value from the session
if (isset($_SESSION['accessArray'])) {
    $access = $_SESSION['accessArray'];
} else {
    //echo "No value found in the session. <br/>";
}
//echo "Access array has the values : " . var_dump($access) . "<br/>";

?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <?php
          global $modules;
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
        <li>
          <a href="userlist.php" class="nav-link px-2">User List</a>
        </li>
        <?php
          if(isset($_SESSION['username']))
          {
        ?>
            <li>
              <a href="profile.php" class="nav-link px-2">User Profile</a>
            </li>
        <?php
          }
        ?>
        <li>
          <a href="features.php" class="nav-link px-2">Features</a>
        </li>
        <li>
          <a href="history.php" class="nav-link px-2">Version History</a>
        </li>
        <li>
          <a href="#" class="nav-link px-2">Contact</a>
        </li>
      </ul>
      <!--<form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>-->
      <ul class="nav navbar-nav pull-right">
          <!--<li>
            <button type="button" class="btn btn-outline-primary me-4">Login</button>
          </li>-->
          <!-- Logout Button -->
          <!--<form action="login.php" method="POST" class="mt-3">
            <button type="submit" class="btn btn-primary">Login</button>
          </form>-->
          <?php
            if(isset($_SESSION['username']))
            {
          ?>
              <li>
                <!-- Logout Button -->
                <form action="logout.php" method="POST">
                  <button type="submit" class="btn btn-danger me-4">Logout</button>
                </form>
              </li>
          <?php
            }
            else
            {
              ?>
                  <li>
                    <!-- Logout Button -->
                    <form action="login.php" method="POST">
                      <button type="submit" class="btn btn-primary me-4">Login</button>
                    </form>
                  </li>
          <?php
            }
          ?>
          <li>
            <button type="button" class="btn btn-primary me-4">Register</button>
          </li>
      </ul>
    </div>
  </div>
</nav>
