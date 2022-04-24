<?php

// connection

include '../connection.php';
include '../allow.php';

// select

$_client = mysqli_query($master, "
    SELECT * FROM ilcodigo
    WHERE ilcodigoId = '" . $_GET["cid"] . "'
");

$client = $_client -> fetch_object();
$ilcodigoName = $client -> ilcodigoName ;

// view

require_once '../v/ilcodigo/jUpdate.php';