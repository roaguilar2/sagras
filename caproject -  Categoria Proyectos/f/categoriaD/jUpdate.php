<?php

// connection

include '../connection.php';

include '../allow.php';

// select

$_client = mysqli_query($master, "
    SELECT * FROM caprojects
    WHERE caprojectsId = '" . $_GET["cid"] . "'
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

require_once '../v/caproject/jUpdate.php';







