<?php

// connection

include '../connection.php';
include '../allow.php';

// select

$_client = mysqli_query($master, "
    SELECT * FROM ris
    WHERE risId = '" . $_GET["cid"] . "'
");

$client = $_client -> fetch_object();
$risName = $client -> risName ;

// view

require_once '../v/ris/jUpdate.php';