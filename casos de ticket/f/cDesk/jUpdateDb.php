<?php

// connection

include '../connection.php';

// module

$module = 'cticket';
$action = 'update';

// var

$cticketName = filter_var($_POST['cticketName'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE cticket
    SET
    cticketName = ?
    WHERE
    cticketId = ?
");	

$update -> bind_param (
    "si",
    $cticketName, $_GET["id"]
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
