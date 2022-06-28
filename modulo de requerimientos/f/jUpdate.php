<?php

// connection

include '../connection.php';
include '../allow.php';

// select

$_client = mysqli_query($master, "
    SELECT * FROM mrequerimiento
    WHERE mrequerimientoId = '" . $_GET["cid"] . "'
");

$client = $_client -> fetch_object();
$mrequerimientoName = $client -> mrequerimientoName ;

// view

require_once '../v/mrequerimiento/jUpdate.php';