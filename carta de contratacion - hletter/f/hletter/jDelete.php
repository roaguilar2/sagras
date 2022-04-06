<?php

// connection

include '../connection.php';

// select

$_hletter = mysqli_query($master, "
    SELECT * FROM hletter
    WHERE hletterId = '" . $_GET["id"] . "'
");

$hletter = $_hletter -> fetch_object();

// view

require_once '../v/hletter/jDelete.php';
