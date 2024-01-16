<?php
session_start();

$url = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];

if (!isset($_GET['page'])) {
    $page = "homepage";
} else {
    $page = $_GET['page'];
}

if (!isset($_GET['css'])) {
    $css = "bauhaus";
} else {
    $css = $_GET["css"];
}

include "functions.php";
include 'pages/' . $page . ".php";
include 'parts/layout.php';
?>

