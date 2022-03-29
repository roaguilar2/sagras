<?php

// connection

include '../connection.php';

// module

$module = 'ptarea';
$action = 'update';

// var

$ptareaName = filter_var($_POST['ptareaName'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE ptarea
    SET
    ptareaName = ?
    WHERE
    ptareaId = ?
");	

$update -> bind_param (
    "si",
    $ptareaName, $_GET["id"]
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
