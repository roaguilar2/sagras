<?php

// connection

include '../connection.php';
// var

$c = $_GET["cid"];

// select

$_client = mysqli_query(
    $master,"
    SELECT * FROM aestrategia
    WHERE aestrategiaId = '" . $c . "'
");

$client = $_client -> fetch_object();

// view

require_once '../v/aestrategia/jDelete.php';
