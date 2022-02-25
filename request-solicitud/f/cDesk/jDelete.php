<?php

// connection

include '../connection.php';

// select

$_request = mysqli_query($master, "
    SELECT * FROM request
    WHERE requestId = '" . $_GET["id"] . "'
");

$request = $_request -> fetch_object();

// view

require_once '../v/request/jDelete.php';
