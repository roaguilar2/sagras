<?php

// connection

include '../connection.php';

// module

$module = 'pticket';

// select

$_pticket = mysqli_query($master, "
    SELECT * FROM pticket
    WHERE pticketId = '" . $_GET["id"] . "'
");

$pticket = $_pticket -> fetch_object();

// view

require_once '../v/pticket/jUpdate.php';
