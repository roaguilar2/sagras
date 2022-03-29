<?php

// connection

include '../connection.php';

// module
$module = 'pstareas';

// select

//$_pstareas = mysqli_query($master, "
//    SELECT * FROM pstareas
//    WHERE pstareasId = '" . $_GET["id"] . "'
//");

//$pstareas = $_pstareas -> fetch_object();


$_user = mysqli_query($master, "
    SELECT * FROM user
    WHERE userStatus = 1 
    AND subscriberId = '" .  $_SESSION["subscriberId"] . "'
    ORDER BY userName
");

$_designated = mysqli_query($master, "
    SELECT * FROM designated
    WHERE designatedStatus = 1
    ORDER BY designatedId
");

$_grupo = mysqli_query($master, "
    SELECT * FROM department
    WHERE departmentStatus = 1
    ORDER BY departmentName
");





$module = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleId = '" . $_GET["id"] . "'
");
$r_module = mysqli_fetch_array($module);

// set fields
$moduleName = $r_module["moduleName"];
$moduleId = $r_module["moduleId"];

// view

$p = mysqli_query($master, "
    SELECT * FROM pstareas
    
    WHERE moduleId = '" . $_GET["id"] . "'
");


require_once '../v/pstareas/jUpdate.php';
