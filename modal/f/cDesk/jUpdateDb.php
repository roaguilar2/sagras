<?php

// connection

include '../connection.php';

// module

$module = 'modal';
$action = 'update';

// var

$modalName = filter_var($_POST['modalName'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE modal
    SET
    modalName = ?
    WHERE
    modalId = ?
");	

$update -> bind_param (
    "si",
    $modalName, $_GET["id"]
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

echo "<script> window.location='../c/{$module}.php?m=index&n=updated'</script>";
