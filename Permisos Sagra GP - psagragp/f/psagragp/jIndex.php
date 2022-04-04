<?php

// module

$module = 'psagragp';
$moduleId = 125;

// connection

include '../connection.php';
include '../allow.php';

// var

$n = $_GET["n"];

// select

$_user = mysqli_query($master, "
    SELECT * FROM user
    WHERE userTypeId = 1
    AND userStatus = 1
");

// view

include '../plugins/toast/toast.php';

switch ($n) {

    case 'added':
        echo $added;
        require_once '../v/psagragp/jIndex.php';
        break;
    
    case 'updated':
        echo $updated;
        require_once '../v/psagragp/jIndex.php';
        break;

    case 'notAllowed':
        echo $notAllowed;
        require_once '../v/psagragp/jIndex.php';
        break;

    default:
        require_once '../v/psagragp/jIndex.php';
        break;

}
