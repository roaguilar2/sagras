<?php

// connection

include '../connection.php';

$_service = mysqli_query($master, "
    SELECT * FROM service
    WHERE serviceStatus = 1
    
");



// view

require_once '../v/requerimiento/jCreate.php';
