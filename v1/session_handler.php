<?php
//session_start(); // Start the session
if (!isset($_SESSION)) {
    session_start();
}

// Timeout duration in seconds (e.g., 900 for 15 minutes, 300 for 5 minutes)
$timeout_duration = 300;

// Check if `LAST_ACTIVITY` is set in the session
if (isset($_SESSION['LAST_ACTIVITY'])) {
    $elapsed_time = time() - $_SESSION['LAST_ACTIVITY'];

    // If the session timeout duration has elapsed, destroy the session
    if ($elapsed_time > $timeout_duration) {
        session_unset();
        session_destroy();
        header("Location: login.php?timeout=true"); // Redirect to login page
        exit();
    }
}

// Update the last activity time
$_SESSION['LAST_ACTIVITY'] = time();
?>
