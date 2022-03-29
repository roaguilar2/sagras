<?php

// connection

include '../connection.php';

// module

$module = 'stareas';
$id = '120';
// select
$_permiso = mysqli_query($master, "
    SELECT * FROM permiso
    WHERE userId = '" . $_SESSION["userId"] . "'
    AND moduleId = '" . $id . "'
");
$permiso = mysqli_fetch_array($_permiso);

// set fields
$d = $permiso["designatedId"];

// select

$_c = mysqli_query($master, "
    SELECT * FROM stareas
    INNER JOIN department
    ON stareas.departmentId = department.departmentId
    WHERE stareasId = '" . $_GET["id"] . "'
");
$c = mysqli_fetch_array($_c);

// set fields
$grupo = $c["departmentName"];




$stareas = mysqli_query($master, "
    SELECT * FROM stareas
    WHERE stareasId = '" . $_GET["id"] . "'
");


$r_stareas = mysqli_fetch_array($stareas);


// set fields
$stareasId = $r_stareas["stareasId"];
$titulo = $r_stareas["stareasName"];
$stareasText = $r_stareas["stareasText"];
$cat = $r_stareas["cat"];
$stareasTextA = $r_stareas["stareasTextA"];
$s = $r_stareas["stareasStatus"];
$sName = $r_stareas["subs"];
$name = $r_stareas["nombre"];
$nameA = $r_stareas["nombreA"];


$tA = mysqli_query($master, "
    SELECT * FROM stareas
    WHERE stareasId = '" . $_GET["id"] . "'
");

$r_tA = mysqli_fetch_array($tA);



// view



require_once '../v/stareas/jUpdate.php';
