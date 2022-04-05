<?php

// connection

include '../connection.php';

// module

$module = 'pbudget';
$action = 'delete';

// var

$pbudgetStatus = 0;

// update

$update = $master -> prepare ("
    UPDATE pbudget
    SET
    pbudgetStatus = ?
    WHERE
    pbudgetId = ?
");

$update -> bind_param (
    "ii",
    $pbudgetStatus, $_GET["id"]
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
