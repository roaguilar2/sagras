<?php

// connection

include '../connection.php';

// module

$module = 'showhomework';
$action = 'delete';

// var

$showhomeworkStatus = 0;

// update

$update = $master -> prepare ("
    UPDATE showhomework
    SET
    showhomeworkStatus = ?
    WHERE
    showhomeworkId = ?
");

$update -> bind_param (
    "ii",
    $showhomeworkStatus, $_GET["id"]
);

$update -> execute();

// trace

$trace = $master -> prepare ("
    INSERT INTO trace
    (userId, module, action, itemId)
    VALUES
    (?,?,?,?)
");

$trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $_GET["id"]);

$trace -> execute();

// view

echo "<script> window.location='../c/{$module}.php?m=index&n=deleted'</script>";
