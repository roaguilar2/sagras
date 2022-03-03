<?php

// connection

include '../connection.php';

// module

$module = 'showhomework';

// select

$_showhomework = mysqli_query($master, "
    SELECT * FROM showhomework
    WHERE showhomeworkId = '" . $_GET["id"] . "'
");

$showhomework = $_showhomework -> fetch_object();

// view

require_once '../v/showhomework/jUpdate.php';
