<?php

// connection

include '../connection.php';
include '../allow.php';

// select

$_client = mysqli_query($master, "
    SELECT * FROM aejecucion
    WHERE aejecucionId = '" . $_GET["cid"] . "'
");

$client = $_client -> fetch_object();
$aejecucionName = $client -> aejecucionName ;

// view

require_once '../v/aejecucion/jUpdate.php';