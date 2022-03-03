<?php

// connection

include '../connection.php';

// select

$_answers = mysqli_query($master, "
    SELECT * FROM answers
    WHERE answersId = '" . $_GET["id"] . "'
");

$answers = $_answers -> fetch_object();

// view

require_once '../v/answers/jDelete.php';
