<?php

// connection

include '../connection.php';

// module

$module = 'ningreso';
$action = 'update';

// var

$ningresoName = filter_var($_POST['ningresoName'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE ningreso
    SET
    ningresoName = ?
    WHERE
    ningresoId = ?
");	

$update -> bind_param (
    "si",
    $ningresoName, $_GET["id"]
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
