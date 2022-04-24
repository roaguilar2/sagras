<?php

// connection

include '../connection.php';
include '../allow.php';

// select

$_client = mysqli_query($master, "
    SELECT * FROM aplanificacion
    WHERE aplanificacionId = '" . $_GET["cid"] . "'
");

$client = $_client -> fetch_object();
$aplanificacionName = $client -> aplanificacionName ;

// view

require_once '../v/aplanificacion/jUpdate.php';