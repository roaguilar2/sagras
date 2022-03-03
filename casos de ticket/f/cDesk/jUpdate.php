<?php

// connection

include '../connection.php';

// module

$module = 'cticket';

// select

$_cticket = mysqli_query($master, "
    SELECT * FROM cticket
    WHERE cticketId = '" . $_GET["id"] . "'
");

$cticket = $_cticket -> fetch_object();

// view

require_once '../v/cticket/jUpdate.php';
