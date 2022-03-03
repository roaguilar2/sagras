<?php

// connection

include '../connection.php';

// select

$_cconsulta = mysqli_query($master, "
    SELECT * FROM cconsulta
    WHERE cconsultaId = '" . $_GET["id"] . "'
");

$cconsulta = $_cconsulta -> fetch_object();

// view

require_once '../v/cconsulta/jDelete.php';
