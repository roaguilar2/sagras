<?php
  
// module

$module = 'ticket';
$id = '74';
// connection

include '../connection.php';
include '../allow.php';

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

$_ticket = mysqli_query($master, "
    SELECT * FROM ticket
    WHERE ticketStatus != 0 AND 
    ticketStatus < 3 AND
    subsId = '" . $_SESSION["subscriberId"] . "'
");
$_ticketA = mysqli_query($master, "
    SELECT * FROM ticket
    WHERE ticketStatus = 3 AND
    subsId = '" . $_SESSION["subscriberId"] . "'
");

// view

include '../plugins/toast/toast.php';

$n = $_GET["n"];

switch ($n) {

    case 'added':
        echo $added;
        require_once '../v/ticket/jIndex.php';
        break;

    case 'updated':
        echo $updated;
        require_once '../v/ticket/jIndex.php';
        break;

    case 'deleted':
        echo $deleted;
        require_once '../v/ticket/jIndex.php';
        break;

    case 'duplicated':
        echo $duplicated;
        require_once '../v/ticket/jIndex.php';
        break;

    case 'notAllowed':
        echo $notAllowed;
        require_once '../v/ticket/jIndex.php';
        break;

    default:
        require_once '../v/ticket/jIndex.php';
        break;
}
