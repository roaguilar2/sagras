<?php

// connection

include '../connection.php';

// select

$_bscheme = mysqli_query($master, "
    SELECT * FROM bscheme
    WHERE bschemeId = '" . $_GET["id"] . "'
");

$bscheme = $_bscheme -> fetch_object();

// view

require_once '../v/bscheme/jDelete.php';
