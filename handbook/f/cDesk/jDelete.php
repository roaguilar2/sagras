<?php

// connection

include '../connection.php';

// select

$_handbook = mysqli_query($master, "
    SELECT * FROM handbook
    WHERE handbookId = '" . $_GET["id"] . "'
");

$handbook = $_handbook -> fetch_object();

// view

require_once '../v/handbook/jDelete.php';
