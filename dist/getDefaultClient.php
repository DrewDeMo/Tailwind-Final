<?php
session_start();  // Start the session at the top of your PHP file

// Check if the session variable for the active client is set
if (isset($_SESSION['activeClient'])) {
    echo $_SESSION['activeClient'];
} else {
    // Set a default client if the session variable is not set
    $_SESSION['activeClient'] = 'Window World of Altoona';
    echo $_SESSION['activeClient'];
}
