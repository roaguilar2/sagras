<?php

// connection

include '../connection.php';

// module

$module = 'ntrabajador';

// select

$_ntrabajador = mysqli_query($master, "
    SELECT * FROM ntrabajador
    WHERE ntrabajadorId = '" . $_GET["id"] . "'
");

$ntrabajador = $_ntrabajador -> fetch_object();

// view

require_once '../v/ntrabajador/jUpdate.php';
