<?php

// module

$module = 'pstareas';

// connection

include '../connection.php';
include '../connection2.php';
include '../allow.php';

// select

$_pstareas = mysqli_query($master, "
    SELECT * FROM pstareasm
    INNER JOIN module
    ON pstareasm.moduleId = module.moduleId
    WHERE subscriberId = '" .  $_SESSION["subscriberId"] . "'
");

// view

include '../plugins/toast/toast.php';

$n = $_GET["n"];

switch ($n) {

    case 'added':
        echo $added;
        require_once '../v/pstareas/jIndex.php';
        break;

    case 'updated':
        echo $updated;
        require_once '../v/pstareas/jIndex.php';
        break;

    case 'deleted':
        echo $deleted;
        require_once '../v/pstareas/jIndex.php';
        break;

    case 'duplicated':
        echo $duplicated;
        require_once '../v/pstareas/jIndex.php';
        break;

    case 'notAllowed':
        echo $notAllowed;
        require_once '../v/pstareas/jIndex.php';
        break;

    default:
        require_once '../v/pstareas/jIndex.php';
        break;
}
