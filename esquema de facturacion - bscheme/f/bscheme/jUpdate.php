<?php

// connection

include '../connection.php';

// module

$module = 'bscheme';

// select

$_bscheme = mysqli_query($master, "
    SELECT * FROM bscheme
    WHERE bschemeId = '" . $_GET["id"] . "'
");

$bscheme = $_bscheme -> fetch_object();

// view

require_once '../v/bscheme/jUpdate.php';
