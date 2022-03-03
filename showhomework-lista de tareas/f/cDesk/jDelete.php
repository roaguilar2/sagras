<?php

// connection

include '../connection.php';

// select

$_showhomework = mysqli_query($master, "
    SELECT * FROM showhomework
    WHERE showhomeworkId = '" . $_GET["id"] . "'
");

$showhomework = $_showhomework -> fetch_object();

// view

require_once '../v/showhomework/jDelete.php';
