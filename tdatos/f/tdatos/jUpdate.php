<?php

// connection

include '../connection.php';
include '../allow.php';

// select

$_client = mysqli_query($master, "
    SELECT * FROM tdatos
    WHERE tdatosId = '" . $_GET["cid"] . "'
");

$client = $_client -> fetch_object();
$tdatosName = $client -> tdatosName ;

// view

require_once '../v/tdatos/jUpdate.php';