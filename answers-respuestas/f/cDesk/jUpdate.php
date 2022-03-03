<?php

// connection

include '../connection.php';

// module

$module = 'answers';

// select

$_answers = mysqli_query($master, "
    SELECT * FROM answers
    WHERE answersId = '" . $_GET["id"] . "'
");

$answers = $_answers -> fetch_object();

// view

require_once '../v/answers/jUpdate.php';
