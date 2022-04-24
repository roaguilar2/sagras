<?php

// connection

include '../connection.php';
include '../allow.php';

// select

$_client = mysqli_query($master, "
    SELECT * FROM aestrategia
    WHERE aestrategiaId = '" . $_GET["cid"] . "'
");

$client = $_client -> fetch_object();
$aestrategiaName = $client -> aestrategiaName ;

// view

require_once '../v/aestrategia/jUpdate.php';