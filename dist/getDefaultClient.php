<?php
session_start();
// Existing code
if (isset($_SESSION['activeClient'])) {
    echo $_SESSION['activeClient'];
} else {
    $_SESSION['activeClient'] = 'Window World of Altoona';
    echo $_SESSION['activeClient'];
}
