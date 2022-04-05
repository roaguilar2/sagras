<?php

// connection

include '../connection.php';

// select

$_dsheet = mysqli_query($master, "
    SELECT * FROM dsheet
    WHERE dsheetId = '" . $_GET["id"] . "'
");

$dsheet = $_dsheet -> fetch_object();

// view

require_once '../v/dsheet/jDeleteExternal.php';
