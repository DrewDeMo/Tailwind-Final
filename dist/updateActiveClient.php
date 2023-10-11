<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['clientName'])) {
        $_SESSION['activeClient'] = $_POST['clientName'];
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'No client name provided']);
    }
}
