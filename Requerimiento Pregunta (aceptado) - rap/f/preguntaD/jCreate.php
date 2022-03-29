<?php

// connection

include '../connection.php';
include '../connection2.php';

// access

include '../allow.php';

// select

$d = mysqli_query($master, "
    SELECT * FROM diagnostico
    WHERE diagnosticoStatus = 1 AND
    diagnosticoId = '" . $_GET['cid'] .  "'
");

$r_categorias = mysqli_fetch_array($d);
$categoriasId = $r_categorias["diagnosticoId"];
$categoriasName = $r_categorias["diagnosticoName"];

$categorias = mysqli_query($master, "
    SELECT * FROM diagnostico
    WHERE diagnosticoStatus = 1
    ORDER BY diagnosticoId
");



// view

require_once '../v/rap/jCreate.php';
