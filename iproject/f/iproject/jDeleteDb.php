<?php
$module = 'iproject';
$action = 'delete';

// connection

include '../connection.php';
// var

$clientId = $_GET["cid"];
$clientStatus = 0;

// update

$update = $master -> prepare ("
    UPDATE iproject
    SET
    iprojectStatus = ?
    WHERE
    iprojectId = ?
");

$update -> bind_param (
    "ii",
    $clientStatus, $clientId
);

$update -> execute();

$trace = $master -> prepare ("
    INSERT INTO trace
    (userId, module, action, itemId)
    VALUES
    (?,?,?,?)
");

$trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $_GET["cid"]);

$trace -> execute();


// view

echo "<script> window.location='../c/iproject.php?m=index&n=deleted'</script>";
