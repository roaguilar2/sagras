<?php

// connection

include '../connection.php';
include '../allow.php';

// select

$_client = mysqli_query($master, "
    SELECT * FROM lcodigo
    WHERE lcodigoId = '" . $_GET["cid"] . "'
");

$client = $_client -> fetch_object();
$lcodigoName = $client -> lcodigoName ;

// view

require_once '../v/lcodigo/jUpdate.php';