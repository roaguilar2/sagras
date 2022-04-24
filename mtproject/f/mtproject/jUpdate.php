<?php

// connection

include '../connection.php';
include '../allow.php';

// select

$_client = mysqli_query($master, "
    SELECT * FROM mtproject
    WHERE mtprojectId = '" . $_GET["cid"] . "'
");

$client = $_client -> fetch_object();
$mtprojectName = $client -> mtprojectName ;

// view

require_once '../v/mtproject/jUpdate.php';