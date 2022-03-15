<?php
$module = 'pproject';
$action = 'delete';

// connection

include '../connection.php';

// var

$clientId = $_GET["pid"];
$c2 = $_GET["cid"];
$clientStatus = 0;

// update

$update = $master -> prepare ("
    UPDATE pproject
    SET
    pprojectStatus = ?
    WHERE
    pprojectId = ?
");

$update -> bind_param (
    "ii",
    $clientStatus, $clientId
);

$update -> execute();

// trace

$userId = $_SESSION["userId"];
$module = 'pproject';
$action = 'Delete';
$itemId = $clientId;

$trace = $master -> prepare ("
	INSERT INTO trace
	(userId, module, action, itemId)
	VALUES
	(?,?,?,?)
	");

$trace -> bind_param (
	"issi",
	$userId, $module, $action, $itemId
);

$trace -> execute();

// view

echo "<script> window.location='../c/pproject.php?m=list&n=deleted&pid={$c2}'</script>";
