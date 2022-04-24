<?php

// connection

include '../connection.php';
// var

$c = $_GET["cid"];

// select

$_client = mysqli_query(
    $master,"
    SELECT * FROM pcontrol
    WHERE pcontrolId = '" . $c . "'
");

$client = $_client -> fetch_object();

// view

require_once '../v/pcontrol/jDelete.php';
