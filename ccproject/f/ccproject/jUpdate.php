<?php

// connection

include '../connection.php';
include '../allow.php';

// select

$_client = mysqli_query($master, "
    SELECT * FROM ccproject
    WHERE ccprojectId = '" . $_GET["cid"] . "'
");

$client = $_client -> fetch_object();
$ccprojectName = $client -> ccprojectName ;

// view

require_once '../v/ccproject/jUpdate.php';