<?php
$module = 'frecuencia';
$action = 'delete';

// connection

include '../connection.php';
// var

$clientId = $_GET["cid"];
$clientStatus = 0;

// update

$update = $master -> prepare ("
    UPDATE frecuencia
    SET
    frecuenciaStatus = ?
    WHERE
    frecuenciaId = ?
");

$update -> bind_param (
    "ii",
    $clientStatus, $clientId
);

$update -> execute();

$trace = $master -> prepare ("
    INSERT INTO trace
    (userId, module, action, itemId)
    VALUES
    (?,?,?,?)
");

$trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $_GET["cid"]);

$trace -> execute();


// view

echo "<script> window.location='../c/frecuencia.php?m=index&n=deleted'</script>";
