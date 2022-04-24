<?php

// connection

include '../connection.php';
include '../allow.php';

// select

$_client = mysqli_query($master, "
    SELECT * FROM riskac
    WHERE riskacId = '" . $_GET["cid"] . "'
");

$client = $_client -> fetch_object();
$riskacName = $client -> riskacName ;

// view

require_once '../v/riskac/jUpdate.php';