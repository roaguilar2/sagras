<?php

// connection

include '../connection.php';
include '../allow.php';

// select

$_client = mysqli_query($master, "
    SELECT * FROM compromiso
    WHERE compromisoId = '" . $_GET["cid"] . "'
");

$client = $_client -> fetch_object();
$compromisoName = $client -> compromisoName ;

// view

require_once '../v/compromiso/jUpdate.php';