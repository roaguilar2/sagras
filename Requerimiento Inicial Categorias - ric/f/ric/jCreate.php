<?php

// connection

include '../connection.php';

// access

include '../allow.php';

// select

$categorias = mysqli_query($master, "
    SELECT * FROM diagnostico
    WHERE diagnosticoStatus = 1
    ORDER BY diagnosticoId
");



// view

require_once '../v/ric/jCreate.php';
