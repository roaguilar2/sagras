<?php

// connection

include '../connection.php';

// select

$_homework = mysqli_query($master, "
    SELECT * FROM homework
    WHERE homeworkId = '" . $_GET["id"] . "'
");

$homework = $_homework -> fetch_object();

// view

require_once '../v/homework/jDelete.php';
