<?php

// connection

include '../connection.php';

// module

$module = 'ticket';

// select

$ticket = mysqli_query($master, "
    SELECT * FROM ticket
    WHERE ticketId = '" . $_GET["id"] . "'
");

$r_ticket = mysqli_fetch_array($ticket);

// set fields
$ticketId = $r_ticket["ticketId"];
$titulo = $r_ticket["ticketName"];
$ticketText = $r_ticket["ticketText"];
$ticketText2 = $r_ticket["ticketTextA"];
$cat = $r_ticket["departmentId"];
$s = $r_ticket["ticketStatus"];
$date = $r_ticket["date"];
$n = $r_ticket["nombre"];
$nA = $r_ticket["nombreA"];
$r = $r_ticket["rName"];
$subs = $r_ticket["subs"];
// view

$dp = mysqli_query($master, "
    SELECT * FROM department
    WHERE departmentId = '" . $cat . "'
");

$r_dp = mysqli_fetch_array($dp);

// set fields
$dpN = $r_dp["departmentName"];

require_once '../v/ticket/jRead.php';
