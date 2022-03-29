<?php

// connection

include '../connection.php';

// module

$module = 'stareas';

// select

$stareas = mysqli_query($master, "
    SELECT * FROM stareas
    WHERE stareasId = '" . $_GET["id"] . "'
");

$r_stareas = mysqli_fetch_array($stareas);

// set fields
$stareasId = $r_stareas["stareasId"];
$titulo = $r_stareas["stareasName"];
$stareasText = $r_stareas["stareasText"];
$stareasText2 = $r_stareas["stareasTextA"];
$cat = $r_stareas["departmentId"];
$s = $r_stareas["stareasStatus"];
$date = $r_stareas["date"];
$n = $r_stareas["nombre"];
$nA = $r_stareas["nombreA"];
$r = $r_stareas["rName"];
$subs = $r_stareas["subs"];
// view

$dp = mysqli_query($master, "
    SELECT * FROM department
    WHERE departmentId = '" . $cat . "'
");

$r_dp = mysqli_fetch_array($dp);

// set fields
$dpN = $r_dp["departmentName"];

require_once '../v/stareas/jRead.php';
