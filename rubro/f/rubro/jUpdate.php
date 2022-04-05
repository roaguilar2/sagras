<?php

// connection

include '../connection.php';

// module

$module = 'rubro';

// select

$_rubro = mysqli_query($master, "
    SELECT * FROM rubro
    WHERE rubroId = '" . $_GET["id"] . "'
");

$rubro = $_rubro -> fetch_object();

// view

require_once '../v/rubro/jUpdate.php';
