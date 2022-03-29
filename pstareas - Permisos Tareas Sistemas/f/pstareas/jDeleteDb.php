<?php

// connection

include '../connection.php';

// module

$module = 'pstareas';
$action = 'delete';

// var

$pstareasStatus = 0;
$moduleId = 0;
$userId = 0;
$userName = 0;
$designatedId = 0;
$c = $_GET["u"];
// update

$update = $master -> prepare ("
    UPDATE pstareas
    SET
    pstareasStatus = ?,
    moduleId = ?,
    userId = ?,
    userName = ?,
    designatedId = ?
    WHERE
    pstareasId = ?
");

$update -> bind_param (
    "iiiiii",
    $pstareasStatus, $moduleId, $userId, $userName, $designatedId, $_GET["id"]
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
