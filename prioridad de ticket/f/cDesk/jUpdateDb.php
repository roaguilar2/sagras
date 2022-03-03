<?php

// connection

include '../connection.php';

// module

$module = 'pticket';
$action = 'update';

// var

$pticketName = filter_var($_POST['pticketName'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE pticket
    SET
    pticketName = ?
    WHERE
    pticketId = ?
");	

$update -> bind_param (
    "si",
    $pticketName, $_GET["id"]
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
