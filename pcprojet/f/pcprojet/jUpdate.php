<?php

// connection

include '../connection.php';
include '../allow.php';

// select

$_client = mysqli_query($master, "
    SELECT * FROM pcproject
    WHERE pcprojectId = '" . $_GET["cid"] . "'
");

$client = $_client -> fetch_object();
$pcprojectName = $client -> pcprojectName ;

// view

require_once '../v/pcproject/jUpdate.php';