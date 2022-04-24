<?php

// connection

include '../connection.php';
// var

$c = $_GET["cid"];

// select

$_client = mysqli_query(
    $master,"
    SELECT * FROM compromiso
    WHERE compromisoId = '" . $c . "'
");

$client = $_client -> fetch_object();

// view

require_once '../v/compromiso/jDelete.php';
