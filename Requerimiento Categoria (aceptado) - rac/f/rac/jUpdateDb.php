<?php

// connection

include '../connection.php';
// module

$module = 'rac';
$action = 'update';

// var
$id = $_GET["cid"];
$racsName = filter_var($_POST['racsName'], FILTER_SANITIZE_STRING);
$racsExp = filter_var($_POST['racsExp'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE racs
    SET
    racsName = ?,
    racsExp = ?
    WHERE
    racsId = ?
");	

$update -> bind_param (
    "ssi",
    $racsName, $racsExp , $_GET["pid"]
);

$update -> execute();

// trace

$trace = $master -> prepare ("
    INSERT INTO trace
    (userId, module, action, itemId)
    VALUES
    (?,?,?,?)
");

$trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $_GET["pid"]);

$trace -> execute();

// view

echo "<script> window.location='../c/{$module}.php?m=list&n=updated&pid={$id}'</script>";
