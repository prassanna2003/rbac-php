<?php

//session_start(); // Start the session
if (!isset($_SESSION)) {
    session_start();
}

require_once 'header.php';

echo "<h1>Welcome to the RBAC PHP Implementation</h1>";

include_once 'profile.php';

require_once 'footer.php';
?>
