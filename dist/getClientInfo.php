<?php
header("Content-Type: application/json");

$clients = array(
    "Window World of Altoona" => array(
        "location" => "114 Vision Dr., Duncansville, PA 16635",
        "phone" => "814-693-0133",
        "owners" => array("Matt George", "Paul Myers", "Christian Harr"),
        "logo" => "img/logos/ww_white.svg",
        "search_icon" => "img/logos/ww_search_icon.svg",
    ),
    "Window World of Binghamton" => array(
        "location" => "753 Harry L Drive, Johnson City, NY 13790",
        "phone" => "607-797-3234",
        "owners" => array("Mike Hoffmeier"),
        "logo" => "img/logos/ww_white.svg",
        "search_icon" => "img/logos/ww_search_icon.svg",
        "data-set-theme" => "ww-blue",
    ),
    "RoofWorks USA" => array(
        "location" => " 128 Vision Drive., Duncansville, PA 16635",
        "phone" => " 814-502-5253",
        "owners" => array("Chad Shirey", "Paul Balzano"),
        "logo" => "img/logos/RWU_FC.svg",
        "search_icon" => "img/logos/rwu_search_icon.svg",
        "data-set-theme" => "rwu",
    ),
);

$clientName = $_GET["name"];

if (isset($clients[$clientName])) {
    echo json_encode($clients[$clientName]);
} else {
    echo json_encode(array("error" => "Client not found"));
}
