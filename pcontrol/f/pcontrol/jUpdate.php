<?php

// connection

include '../connection.php';
include '../allow.php';

// select

$_client = mysqli_query($master, "
    SELECT * FROM pcontrol
    WHERE pcontrolId = '" . $_GET["cid"] . "'
");

$client = $_client -> fetch_object();
$pcontrolName = $client -> pcontrolName ;

// view

require_once '../v/pcontrol/jUpdate.php';