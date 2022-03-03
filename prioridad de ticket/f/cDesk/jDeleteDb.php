<?php

// connection

include '../connection.php';

// module

$module = 'pticket';
$action = 'delete';

// var

$pticketStatus = 0;

// update

$update = $master -> prepare ("
    UPDATE pticket
    SET
    pticketStatus = ?
    WHERE
    pticketId = ?
");

$update -> bind_param (
    "ii",
    $pticketStatus, $_GET["id"]
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
