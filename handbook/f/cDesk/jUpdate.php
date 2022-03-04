<?php

// connection

include '../connection.php';

// module

$module = 'handbook';

// select

$_cticket = mysqli_query($master, "
    SELECT * FROM handbook
    WHERE cticketId = '" . $_GET["id"] . "'
");

$handbook = $_cticket -> fetch_object();

// view

require_once '../v/handbook/jUpdate.php';
