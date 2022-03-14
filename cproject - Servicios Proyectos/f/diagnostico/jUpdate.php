<?php

// connection

include '../connection.php';
include '../allow.php';

// select

$_client = mysqli_query($master, "
    SELECT * FROM cproject
    WHERE cprojectId = '" . $_GET["cid"] . "'
");

$client = $_client -> fetch_object();
$cprojectName = $client -> cprojectName ;

// view

require_once '../v/cproject/jUpdate.php';