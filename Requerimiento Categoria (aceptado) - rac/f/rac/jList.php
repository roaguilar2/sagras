<?php

// module

$module = 'rac';
$moduleId =  121;
// connection
include '../connection.php';
include '../allow.php';

// select

$_cp = mysqli_query($master, "
    SELECT * FROM categorias
    WHERE diagnosticoId = '" . $_GET["pid"] . "'  AND
    categoriasStatus = 1
");
$_cp2 = mysqli_query($master, "
    SELECT * FROM categorias
    WHERE categoriasStatus = 1
");
$_cp3 = mysqli_query($master, "
    SELECT * FROM diagnostico
    WHERE diagnosticoId = '" . $_GET["pid"] . "' 
");
$cp3 = $_cp3 -> fetch_object();
$dname = $cp3 -> diagnosticoName ;
// view

include '../plugins/toast/toast.php';

$n = $_GET["n"];

switch ($n) {

    case 'added':
        echo $added;
        require_once '../v/rac/jList.php';
        break;

    case 'updated':
        echo $updated;
        require_once '../v/rac/jList.php';
        break;

    case 'deleted':
        echo $deleted;
        require_once '../v/rac/jList.php';
        break;

    case 'duplicated':
        echo $duplicated;
        require_once '../v/rac/jList.php';
        break;
    
    case 'porcentaje':
        echo $porcentaje;
        require_once '../v/rac/jList.php';
        break;
    
    case 'notAllowed':
        echo $notAllowed;
        require_once '../v/rac/jList.php';
        break;

    default:
        require_once '../v/rac/jList.php';
        break;
}