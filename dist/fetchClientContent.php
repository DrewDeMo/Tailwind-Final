<?php
session_start();
if ($_SESSION['activeClient'] === 'RoofWorks USA') {
    if (file_exists('client/client_rwu.php')) {
        include 'client/client_rwu.php';
    } else {
        echo "File client/client_rwu.php not found.";
    }
} else {
    if (file_exists('client/client_ww.php')) {
        include 'client/client_ww.php';
    } else {
        echo "File client/client_ww.php not found.";
    }
}
