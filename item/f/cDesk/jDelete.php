<?php

// connection

include '../connection.php';

// select

$_item = mysqli_query($master, "
    SELECT * FROM item
    WHERE itemId = '" . $_GET["id"] . "'
");

$item = $_item -> fetch_object();

// view

require_once '../v/item/jDelete.php';
