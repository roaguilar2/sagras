<?php

// connection

include '../connection.php';

// module

$module = 'item';
$action = 'update';

// var

$itemName = filter_var($_POST['itemName'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE item
    SET
    itemName = ?
    WHERE
    itemId = ?
");	

$update -> bind_param (
    "si",
    $itemName, $_GET["id"]
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
