<?php

// connection

include '../connection.php';

// module

$module = 'permiso';
$action = 'delete';

// var

$permisoStatus = 0;
$moduleId = 0;
$userId = 0;
$userName = 0;
$designatedId = 0;
$c = $_GET["u"];
// update

$update = $master -> prepare ("
    UPDATE permiso
    SET
    permisoStatus = ?,
    moduleId = ?,
    userId = ?,
    userName = ?,
    designatedId = ?
    WHERE
    permisoId = ?
");

$update -> bind_param (
    "iiiiii",
    $permisoStatus, $moduleId, $userId, $userName, $designatedId, $_GET["id"]
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

echo "<script> window.location='../c/{$module}.php?m=update&id={$c}'</script>";
