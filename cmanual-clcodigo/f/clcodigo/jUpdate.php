<?php

// connection

include '../connection.php';

include '../allow.php';

// select

$_client = mysqli_query($master, "
    SELECT * FROM clcodigo
    WHERE clcodigoId = '" . $_GET["cid"] . "'
");

$client = $_client -> fetch_object();
$d = $client -> manualId ;

// select

$_country = mysqli_query($master, "
    SELECT * FROM manual
    WHERE manualId = '" . $d . "'
");

$country = $_country -> fetch_object();
$manualName = $country -> manualName ;


// view

require_once '../v/clcodigo/jUpdate.php';







