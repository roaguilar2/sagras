<?php

// connection

include '../connection.php';

// module

$module = 'instructions';

// select

$_instructions = mysqli_query($master, "
    SELECT * FROM instructions
    WHERE instructionsId = '" . $_GET["id"] . "'
");

$instructions = $_instructions -> fetch_object();

// view

require_once '../v/instructions/jUpdate.php';
