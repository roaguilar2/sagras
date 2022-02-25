<?php

// connection

include '../connection.php';

// module

$module = 'homework';

// select

$_homework = mysqli_query($master, "
    SELECT * FROM homework
    WHERE homeworkId = '" . $_GET["id"] . "'
");

$homework = $_homework -> fetch_object();

// view

require_once '../v/homework/jUpdate.php';
