<?php

// connection

include '../connection.php';

// module

$module = 'test';

// select

$_test = mysqli_query($master, "
    SELECT * FROM test
    WHERE testId = '" . $_GET["id"] . "'
");

$test = $_test -> fetch_object();

// view

require_once '../v/test/jUpdate.php';
