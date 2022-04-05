<?php

// module

$module = 'dsheet';
$moduleId = 7;

// connection

include '../connection.php';
include '../allow.php';

// select

$_dsheet = mysqli_query($master, "
    SELECT * FROM dsheet
    WHERE subscriberId = 1
    AND dsheetStatus = 1
");

// select

$_access = mysqli_query($master, "
    SELECT * FROM access
    INNER JOIN module
    ON access.moduleId = module.moduleId
    INNER JOIN dsheet
    ON access.dsheetId = dsheet.dsheetId
    WHERE dsheet.dsheetId = '" . $_SESSION["dsheetId"] . "'
    AND module.moduleController = '" . $module . "'
");

$access = $_access -> fetch_object();

// view

include '../plugins/toast/toast.php';

$n = $_GET["n"];

switch ($n) {

    case 'added':

        echo $added;
    	require_once '../v/dsheet/jIndex.php';
    	break;
	
    case 'updated':

        echo $updated;
    	require_once '../v/dsheet/jIndex.php';
    	break;

    case 'deleted':

        echo $deleted;
    	require_once '../v/dsheet/jIndex.php';
    	break;
    
    case 'duplicated':

        echo $duplicated;
    	require_once '../v/dsheet/jIndex.php';
    	break;

    case 'notAllowed':

        echo $notAllowed;
    	require_once '../v/dsheet/jIndex.php';
    	break;

    default:

    	require_once '../v/dsheet/jIndex.php';
    	break;

}
