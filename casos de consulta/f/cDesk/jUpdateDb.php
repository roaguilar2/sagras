<?php

// connection

include '../connection.php';

// module

$module = 'cconsulta';
$action = 'update';

// var

$cconsultaName = filter_var($_POST['cconsultaName'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE cconsulta
    SET
    cconsultaName = ?
    WHERE
    cconsultaId = ?
");	

$update -> bind_param (
    "si",
    $cconsultaName, $_GET["id"]
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
