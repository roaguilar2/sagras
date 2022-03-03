<?php

// connection

include '../connection.php';

// module

$module = 'legends';
$action = 'update';

// var

$legendsName = filter_var($_POST['legendsName'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE legends
    SET
    legendsName = ?
    WHERE
    legendsId = ?
");	

$update -> bind_param (
    "si",
    $legendsName, $_GET["id"]
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
