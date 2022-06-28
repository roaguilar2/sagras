<?php

// connection

include '../connection.php';
include '../allow.php';

// select

$_client = mysqli_query($master, "
    SELECT * FROM manual
    WHERE manualId = '" . $_GET["cid"] . "'
");

$client = $_client -> fetch_object();
$manualName = $client -> manualName ;

// view

require_once '../v/manual/jUpdate2.php';