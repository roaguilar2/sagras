<?php

// connection

include '../connection.php';
// module

$module = 'clcodigo';
$action = 'update';

// var
$id = $_GET["cid"];
$clcodigoName = filter_var($_POST['clcodigoName'], FILTER_SANITIZE_STRING);
$clcodigoExp = filter_var($_POST['clcodigoExp'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE clcodigo
    SET
    clcodigoName = ?,
    clcodigoExp = ?
    WHERE
    clcodigoId = ?
");	

$update -> bind_param (
    "ssi",
    $clcodigoName, $clcodigoExp , $_GET["pid"]
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
