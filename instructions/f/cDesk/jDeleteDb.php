<?php

// connection

include '../connection.php';

// module

$module = 'instructions';
$action = 'delete';

// var

$instructionsStatus = 0;

// update

$update = $master -> prepare ("
    UPDATE instructions
    SET
    instructionsStatus = ?
    WHERE
    instructionsId = ?
");

$update -> bind_param (
    "ii",
    $instructionsStatus, $_GET["id"]
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
