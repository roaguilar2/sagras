<?php

// connection

include '../connection.php';
// var

$c = $_GET["pid"];
$c2 = $_GET["cid"];

// select

$_client = mysqli_query(
    $master,
    "SELECT * FROM rip
    WHERE ripId = '" . $c . "'
");

$client = $_client -> fetch_object();

// view

require_once '../v/rip/jDelete.php';
