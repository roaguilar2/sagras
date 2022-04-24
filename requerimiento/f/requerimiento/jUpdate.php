<?php

// connection

include '../connection.php';
include '../allow.php';

// select

$_client = mysqli_query($master, "
    SELECT * FROM requerimiento
    WHERE requerimientoId = '" . $_GET["cid"] . "'
");

$client = $_client -> fetch_object();
$requerimientoName = $client -> requerimientoName ;

// view

require_once '../v/requerimiento/jUpdate.php';