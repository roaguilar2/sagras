<?php

// connection

include '../connection.php';
include '../allow.php';

// select

$_client2 = mysqli_query($master, "
    SELECT * FROM diagnostico
    WHERE diagnosticoId = '" . $_GET["cid"] . "'
");
$client2 = $_client2 -> fetch_object();

// select

$_client = mysqli_query($master, "
    SELECT * FROM rip
    WHERE ripId = '" . $_GET["pid"] . "'
");

$c = $_client -> fetch_object();
$d = $c -> ripId ;

// select

$_audit = mysqli_query($master, "
    SELECT * FROM dcp
    WHERE ripId = '" . $d . "'
");

// view

require_once '../v/rip/jUpdate.php';