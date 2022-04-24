<?php

// connection

include '../connection.php';

// access

include '../allow.php';

// select

$categorias = mysqli_query($master, "
    SELECT * FROM manual
    WHERE manualStatus = 1
    ORDER BY manualId
");



// view

require_once '../v/clcodigo/jCreate.php';
