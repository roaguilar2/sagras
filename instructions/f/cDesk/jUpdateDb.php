<?php

// connection

include '../connection.php';

// module

$module = 'instructions';
$action = 'update';

// var

$instructionsName = filter_var($_POST['instructionsName'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE instructions
    SET
    instructionsName = ?
    WHERE
    instructionsId = ?
");	

$update -> bind_param (
    "si",
    $instructionsName, $_GET["id"]
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
