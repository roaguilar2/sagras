<?php

// connection

include '../connection.php';

// module

$module = 'quest';
$action = 'update';

// var

$questName = filter_var($_POST['questName'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE quest
    SET
    questName = ?
    WHERE
    questId = ?
");	

$update -> bind_param (
    "si",
    $questName, $_GET["id"]
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
