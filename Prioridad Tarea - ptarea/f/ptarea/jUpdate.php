<?php

// connection

include '../connection.php';

// module

$module = 'ptarea';

// select

$_ptarea = mysqli_query($master, "
    SELECT * FROM ptarea
    WHERE ptareaId = '" . $_GET["id"] . "'
");

$ptarea = $_ptarea -> fetch_object();

// view

require_once '../v/ptarea/jUpdate.php';
