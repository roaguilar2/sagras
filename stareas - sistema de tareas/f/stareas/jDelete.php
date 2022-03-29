<?php

// connection

include '../connection.php';

// select

$_stareas = mysqli_query($master, "
    SELECT * FROM stareas
    WHERE stareasId = '" . $_GET["id"] . "'
");

$stareas = $_stareas -> fetch_object();

// view

require_once '../v/stareas/jDelete.php';
