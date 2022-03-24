<?php

// connection

include '../connection.php';

// select

$_permiso = mysqli_query($master, "
    SELECT * FROM permiso
    WHERE permisoId = '" . $_GET["id"] . "'
");

$permiso = $_permiso -> fetch_object();

// view

require_once '../v/permiso/jDelete.php';
