<?php

// connection

include '../connection.php';

// module

$module = 'ningreso';
$action = 'delete';

// var

$ningresoStatus = 0;

// update

$update = $master -> prepare ("
    UPDATE ningreso
    SET
    ningresoStatus = ?
    WHERE
    ningresoId = ?
");

$update -> bind_param (
    "ii",
    $ningresoStatus, $_GET["id"]
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
