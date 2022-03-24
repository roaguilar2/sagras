<?php

// connection

include '../connection.php';

// module

$module = 'ticket';
$id = '74';
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

$_c = mysqli_query($master, "
    SELECT * FROM ticket
    INNER JOIN department
    ON ticket.departmentId = department.departmentId
    WHERE ticketId = '" . $_GET["id"] . "'
");
$c = mysqli_fetch_array($_c);

// set fields
$grupo = $c["departmentName"];




$ticket = mysqli_query($master, "
    SELECT * FROM ticket
    WHERE ticketId = '" . $_GET["id"] . "'
");


$r_ticket = mysqli_fetch_array($ticket);


// set fields
$ticketId = $r_ticket["ticketId"];
$titulo = $r_ticket["ticketName"];
$ticketText = $r_ticket["ticketText"];
$cat = $r_ticket["cat"];
$ticketTextA = $r_ticket["ticketTextA"];
$s = $r_ticket["ticketStatus"];
$sName = $r_ticket["subs"];
$name = $r_ticket["nombre"];
$nameA = $r_ticket["nombreA"];


$tA = mysqli_query($master, "
    SELECT * FROM ticket
    WHERE ticketId = '" . $_GET["id"] . "'
");

$r_tA = mysqli_fetch_array($tA);



// view



require_once '../v/ticket/jUpdate.php';
