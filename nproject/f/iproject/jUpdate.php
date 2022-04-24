<?php

// connection

include '../connection.php';
include '../allow.php';

// select

$_client = mysqli_query($master, "
    SELECT * FROM nproject
    WHERE nprojectId = '" . $_GET["cid"] . "'
");

$client = $_client -> fetch_object();
$nprojectName = $client -> nprojectName ;

// view

require_once '../v/nproject/jUpdate.php';