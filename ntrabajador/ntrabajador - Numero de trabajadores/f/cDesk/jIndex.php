<?php

// module

$module = 'ntrabajador';

// connection

include '../connection.php';
include '../allow.php';

// select

$_ntrabajador = mysqli_query($master, "
    SELECT * FROM ntrabajador
    WHERE ntrabajadorStatus = 1
");

// view

include '../plugins/toast/toast.php';

$n = $_GET["n"];

switch ($n) {

    case 'added':
        echo $added;
        require_once '../v/ntrabajador/jIndex.php';
        break;

    case 'updated':
        echo $updated;
        require_once '../v/ntrabajador/jIndex.php';
        break;

    case 'deleted':
        echo $deleted;
        require_once '../v/ntrabajador/jIndex.php';
        break;

    case 'duplicated':
        echo $duplicated;
        require_once '../v/ntrabajador/jIndex.php';
        break;

    case 'notAllowed':
        echo $notAllowed;
        require_once '../v/ntrabajador/jIndex.php';
        break;

    default:
        require_once '../v/ntrabajador/jIndex.php';
        break;
}
