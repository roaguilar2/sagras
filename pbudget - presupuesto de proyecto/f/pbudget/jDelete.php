<?php

// connection

include '../connection.php';

// select

$_pbudget = mysqli_query($master, "
    SELECT * FROM pbudget
    WHERE pbudgetId = '" . $_GET["id"] . "'
");

$pbudget = $_pbudget -> fetch_object();

// view

require_once '../v/pbudget/jDelete.php';
