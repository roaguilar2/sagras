<?php

// connection

include '../connection.php';
include '../allow.php';

// select

$_client = mysqli_query($master, "
    SELECT * FROM acproject
    WHERE acprojectId = '" . $_GET["cid"] . "'
");

$client = $_client -> fetch_object();
$acprojectName = $client -> acprojectName ;

// view

require_once '../v/esproject/jUpdate.php';