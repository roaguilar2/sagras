<?php

// connection

include '../connection.php';

// module

$module = 'modal';
$action = 'delete';

// var

$modalStatus = 0;

// update

$update = $master -> prepare ("
    UPDATE modal
    SET
    modalStatus = ?
    WHERE
    modalId = ?
");

$update -> bind_param (
    "ii",
    $modalStatus, $_GET["id"]
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
