<?php

// connection

include '../connection.php';

// select

$_pstareas = mysqli_query($master, "
    SELECT * FROM pstareas
    WHERE pstareasId = '" . $_GET["id"] . "'
");

$pstareas = $_pstareas -> fetch_object();

// view

require_once '../v/pstareas/jDelete.php';
