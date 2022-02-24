<?php

// connection

include '../connection.php';

// select

$_ntrabajador = mysqli_query($master, "
    SELECT * FROM ntrabajador
    WHERE ntrabajadorId = '" . $_GET["id"] . "'
");

$ntrabajador = $_ntrabajador -> fetch_object();

// view

require_once '../v/ntrabajador/jDelete.php';
