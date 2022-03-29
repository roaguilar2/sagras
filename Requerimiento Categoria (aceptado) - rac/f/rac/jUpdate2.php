<?php

// connection

include '../connection.php';
include '../allow.php';

// select

$_client = mysqli_query($master, "
    SELECT * FROM racs
    WHERE racsId = '" . $_GET["pid"] . "'
");

$client = $_client -> fetch_object();
$d = $client -> diagnosticoId ;

// select

$_country = mysqli_query($master, "
    SELECT * FROM diagnostico
    WHERE diagnosticoId = '" . $d . "'
");

$country = $_country -> fetch_object();
$diagnosticoName = $country -> diagnosticoName ;


// view

require_once '../v/rac/jUpdate2.php';







