<?php

// connection

include '../connection.php';

// select

$_ningreso = mysqli_query($master, "
    SELECT * FROM ningreso
    WHERE ningresoId = '" . $_GET["id"] . "'
");

$ningreso = $_ningreso -> fetch_object();

// view

require_once '../v/ningreso/jDelete.php';
