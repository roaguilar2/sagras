<?php

// connection

include '../connection.php';

// select

$_user = mysqli_query($master, "
    SELECT * FROM user
    WHERE userId = '" . $_GET["uid"] . "'
");

$user = $_user -> fetch_object();

// select

switch ($_SESSION["subscriberId"]) {
    
    case 1:
        $_module = mysqli_query($master, "
            SELECT * FROM module
            WHERE moduleStatus = 1
            AND moduleType <= 2
            AND moduleId <> 1
            ORDER BY moduleName ASC
        ");
        break;

    default:
        $_module = mysqli_query($master, "
            SELECT * FROM module
            WHERE moduleStatus = 1
            ORDER BY moduleName ASC
        ");
        break;
}

// view

require_once '../v/access/jCreate.php';
