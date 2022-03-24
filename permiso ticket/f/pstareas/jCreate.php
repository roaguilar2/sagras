<?php

// view
include '../connection.php';

// select

$_module = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleType = 9
    ORDER BY moduleName
");
require_once '../v/permiso/jCreate.php';