<?php

//session_start();       // Start the session
if (!isset($_SESSION)) {
    session_start();
}

$_SESSION = [];        // Clear session variables
session_destroy();     // Destroy the session

header('Location: index.php');

?>
