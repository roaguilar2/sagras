<?php

// connection

include '../connection.php';

// module

$module = 'legends';

// select

$_legends = mysqli_query($master, "
    SELECT * FROM legends
    WHERE legendsId = '" . $_GET["id"] . "'
");

$legends = $_legends -> fetch_object();

// view

require_once '../v/legends/jUpdate.php';
