<?php

// connection

include '../connection.php';
// module

$module = 'caproject';
$action = 'update';

// var
$id = $_GET["cid"];
$caprojectsName = filter_var($_POST['caprojectsName'], FILTER_SANITIZE_STRING);
$caprojectsExp = filter_var($_POST['caprojectsExp'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE caprojects
    SET
    caprojectsName = ?,
    caprojectsExp = ?
    WHERE
    caprojectsId = ?
");	

$update -> bind_param (
    "ssi",
    $caprojectsName, $caprojectsExp , $_GET["pid"]
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
