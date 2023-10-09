<?php
header("Content-Type: application/json");

// Sample client data (you can replace this with database query later)
$clients = array(
    "Window World of Altoona" => array(
        "location" => "123 Fake Street, Altoona, PA 12345",
        "phone" => "123-123-1234",
        "owners" => array("Benjamin Hartley", "
        Clara Jeffries", "Thomas Whitfield")
    ),
    "Window World of Binghamton" => array(
        "location" => "123 Binghamton Street, NY 12345",
        "phone" => "123-456-7890",
        "owners" => array("John Doe", "Jane Doe")
    ),
    "RoofWorks USA" => array(
        "location" => "123 Roof Street, NY 12345",
        "phone" => "555-555-5555",
        "owners" => array("John Doe")
    ),
    // ... add more clients
);

$clientName = $_GET["name"];

if (isset($clients[$clientName])) {
    echo json_encode($clients[$clientName]);
} else {
    echo json_encode(array("error" => "Client not found"));
}
