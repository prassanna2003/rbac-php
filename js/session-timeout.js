/**
 * This piece of code is not really working as expected.
 * The Client side code simply redirects to the login.php with a timeout message
 * in a very short span of time (less than a minute) though the timeout interval
 * being set is 5 minutes, and the session is very well active on the server side.
 *
 * Inclusion of this script in commented in the footer.php page, parking aside the
 * R & D for some other time.
 */
function checkSessionTimeout() {
    var timeoutDuration = 300000; // 15 minutes in milliseconds, 5 minutes in ms
    var lastActivityTime = sessionStorage.getItem('lastActivityTime') || 0;
    var currentTime = new Date().getTime();

    if (currentTime - lastActivityTime > timeoutDuration) {
        window.location.href = 'login.php?timeout=true';
    }
}

setInterval(checkSessionTimeout, 5000); // Check every 5 seconds
