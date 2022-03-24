<?php

// module

$module = 'permiso';

// connection

include '../connection.php';
include '../connection2.php';
include '../allow.php';

// select

$_permiso = mysqli_query($master, "
    SELECT * FROM permisom
    INNER JOIN module
    ON permisom.moduleId = module.moduleId
    WHERE subscriberId = '" .  $_SESSION["subscriberId"] . "'
");

// view

include '../plugins/toast/toast.php';

$n = $_GET["n"];

switch ($n) {

    case 'added':
        echo $added;
        require_once '../v/permiso/jIndex.php';
        break;

    case 'updated':
        echo $updated;
        require_once '../v/permiso/jIndex.php';
        break;

    case 'deleted':
        echo $deleted;
        require_once '../v/permiso/jIndex.php';
        break;

    case 'duplicated':
        echo $duplicated;
        require_once '../v/permiso/jIndex.php';
        break;

    case 'notAllowed':
        echo $notAllowed;
        require_once '../v/permiso/jIndex.php';
        break;

    default:
        require_once '../v/permiso/jIndex.php';
        break;
}
