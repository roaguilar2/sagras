<?php

// connection

include '../connection.php';

// module

$module = 'pbudget';
$action = 'update';

// var

$pbudgetName = filter_var($_POST['pbudgetName'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE pbudget
    SET
    pbudgetName = ?
    WHERE
    pbudgetId = ?
");	

$update -> bind_param (
    "si",
    $pbudgetName, $_GET["id"]
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
