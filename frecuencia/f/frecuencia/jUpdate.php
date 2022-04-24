<?php

// connection

include '../connection.php';
include '../allow.php';

// select

$_client = mysqli_query($master, "
    SELECT * FROM frecuencia
    WHERE frecuenciaId = '" . $_GET["cid"] . "'
");

$client = $_client -> fetch_object();
$frecuenciaName = $client -> frecuenciaName ;

// view

require_once '../v/frecuencia/jUpdate.php';