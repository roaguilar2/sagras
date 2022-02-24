<?php

// connection

include '../connection.php';

// module

$module = 'ntrabajador';
$action = 'update';

// var

$ntrabajadorName = filter_var($_POST['ntrabajadorName'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE ntrabajador
    SET
    ntrabajadorName = ?
    WHERE
    ntrabajadorId = ?
");	

$update -> bind_param (
    "si",
    $ntrabajadorName, $_GET["id"]
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
