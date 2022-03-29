<?php

// connection

include '../connection.php';
// var

$c = $_GET["pid"];
$c2 = $_GET["cid"];

// select

$_client = mysqli_query(
    $master,
    "SELECT * FROM rap
    WHERE rapId = '" . $c . "'
");

$client = $_client -> fetch_object();

// view

require_once '../v/rap/jDelete.php';
