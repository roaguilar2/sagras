<?php

// connection

include '../connection.php';

// select

$_test = mysqli_query($master, "
    SELECT * FROM test
    WHERE testId = '" . $_GET["id"] . "'
");

$test = $_test -> fetch_object();

// view

require_once '../v/test/jDelete.php';
