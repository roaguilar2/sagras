<?php

// connection

include '../connection.php';

// module

$module = 'item';

// select

$_item = mysqli_query($master, "
    SELECT * FROM item
    WHERE itemId = '" . $_GET["id"] . "'
");

$item = $_item -> fetch_object();

// view

require_once '../v/item/jUpdate.php';
