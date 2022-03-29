<?php

// connection

include '../connection.php';
// module

$module = 'ric';
$action = 'update';

// var
$id = $_GET["cid"];
$ricsName = filter_var($_POST['ricsName'], FILTER_SANITIZE_STRING);
$ricsExp = filter_var($_POST['ricsExp'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE rics
    SET
    ricsName = ?,
    ricsExp = ?
    WHERE
    ricsId = ?
");	

$update -> bind_param (
    "ssi",
    $ricsName, $ricsExp , $_GET["pid"]
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
