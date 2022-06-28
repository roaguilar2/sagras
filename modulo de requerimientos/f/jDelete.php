<?php

// connection

include '../connection.php';
// var

$c = $_GET["cid"];

// select

$_client = mysqli_query(
    $master,
    "SELECT * FROM manual
    WHERE manualId = '" . $c . "'
");

$client = $_client -> fetch_object();

// view

require_once '../v/manual/jDelete.php';
