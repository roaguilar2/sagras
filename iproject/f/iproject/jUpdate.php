<?php

// connection

include '../connection.php';
include '../allow.php';

// select

$_client = mysqli_query($master, "
    SELECT * FROM iproject
    WHERE iprojectId = '" . $_GET["cid"] . "'
");

$client = $_client -> fetch_object();
$iprojectName = $client -> iprojectName ;

// view

require_once '../v/iproject/jUpdate.php';