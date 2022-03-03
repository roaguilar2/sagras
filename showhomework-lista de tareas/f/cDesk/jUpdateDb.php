<?php

// connection

include '../connection.php';

// module

$module = 'showhomework';
$action = 'update';

// var

$showhomeworkName = filter_var($_POST['showhomeworkName'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE showhomework
    SET
    showhomeworkName = ?
    WHERE
    showhomeworkId = ?
");	

$update -> bind_param (
    "si",
    $showhomeworkName, $_GET["id"]
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
