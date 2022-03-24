<?php
// conectar
include '../connection.php';
$module = 'ticket';
$id = '74';
// connection


// select
$_permiso = mysqli_query($master, "
    SELECT * FROM permiso
    WHERE userId = '" . $_SESSION["userId"] . "'
    AND moduleId = '" . $id . "'
");
$permiso = mysqli_fetch_array($_permiso);

// set fields
$d = $permiso["designatedId"];

// view
$_ticket = mysqli_query($master, "
    SELECT * FROM ticket
    WHERE ticketStatus != 0  AND
    subsId = '" .  $_SESSION["subscriberId"] . "'
");

$_ticket2 = mysqli_query($master, "
    SELECT * FROM ticket
    WHERE ticketStatus != 0 AND
    subsId = '" .  $_SESSION["subscriberId"] . "'
");

$_g = mysqli_query($master, "
    SELECT * FROM department
    WHERE departmentStatus = 1
    ORDER BY departmentName
");


// view
require_once '../v/ticket/jCreate.php';
