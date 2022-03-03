<?php

// connection

include '../connection.php';

// module

$module = 'modal';

// select

$_modal = mysqli_query($master, "
    SELECT * FROM modal
    WHERE modalId = '" . $_GET["id"] . "'
");

$modal = $_modal -> fetch_object();

// view

require_once '../v/modal/jUpdate.php';
