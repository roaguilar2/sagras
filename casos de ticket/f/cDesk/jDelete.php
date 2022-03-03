<?php

// connection

include '../connection.php';

// select

$_cticket = mysqli_query($master, "
    SELECT * FROM cticket
    WHERE cticketId = '" . $_GET["id"] . "'
");

$cticket = $_cticket -> fetch_object();

// view

require_once '../v/cticket/jDelete.php';
