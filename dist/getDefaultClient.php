<?php
session_start();
if (!isset($_SESSION['isNewSession']) || $_SESSION['isNewSession'] === true) {
    $_SESSION['activeClient'] = 'Window World of Altoona';
    $_SESSION['isNewSession'] = false;
}
echo $_SESSION['activeClient'];
