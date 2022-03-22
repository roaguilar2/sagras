<?php

// connection

include '../connection.php';
include '../allow.php';

// select

$_client = mysqli_query($master, "
    SELECT * FROM ras
    WHERE rasId = '" . $_GET["cid"] . "'
");

$client = $_client -> fetch_object();
$rasName = $client -> rasName ;

// view

require_once '../v/ras/jUpdate.php';