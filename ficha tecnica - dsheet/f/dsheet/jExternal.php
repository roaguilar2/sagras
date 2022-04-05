<?php

// module

$module = 'dsheet';
$moduleId = 126;

// connection

include '../connection.php';
include '../allow.php';

// select

$_dsheet = mysqli_query($master, "
    SELECT * FROM dsheet
    WHERE dsheetTypeId = 1
    AND dsheetAdmin = 4
    AND dsheetStatus = 1
");

// view

include '../plugins/toast/toast.php';

$n = $_GET["n"];

switch ($n) {

    case 'added':

        echo $added;
    	require_once '../v/dsheet/jExternal.php';
    	break;
	
    case 'updated':

        echo $updated;
    	require_once '../v/dsheet/jExternal.php';
    	break;

    case 'deleted':

        echo $deleted;
    	require_once '../v/dsheet/jExternal.php';
    	break;
    
    case 'duplicated':

        echo $duplicated;
    	require_once '../v/dsheet/jExternal.php';
    	break;

    case 'notAllowed':

        echo $notAllowed;
    	require_once '../v/dsheet/jExternal.php';
    	break;

    default:

    	require_once '../v/dsheet/jExternal.php';
    	break;

}
