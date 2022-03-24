<?php

// connection

include '../connection.php';

// select

$_ticket = mysqli_query($master, "
    SELECT * FROM ticket
    WHERE ticketId = '" . $_GET["id"] . "'
");

$ticket = $_ticket -> fetch_object();

// view

require_once '../v/ticket/jDelete.php';
