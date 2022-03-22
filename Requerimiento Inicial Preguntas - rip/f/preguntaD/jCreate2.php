<?php

// connection

include '../connection.php';
include '../connection2.php';

// access

include '../allow.php';

$d = $_POST['diagnostico'];
$pn = $_POST['ripName'];

$_country = mysqli_query($master, "
    SELECT * FROM diagnostico
    WHERE diagnosticoId = '" . $d . "'
    ");
                                                
    $country = $_country -> fetch_object();
    $diagnosticoName = $country -> diagnosticoName ;
// select

$_cp = mysqli_query($master, "
    SELECT * FROM categorias
    WHERE diagnosticoId = '" . $d . "'AND
    categoriasStatus = 1
");


// view

require_once '../v/rip/jCreate2.php';
