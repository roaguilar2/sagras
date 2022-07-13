<?php

// connection

include '../connection.php';

// module

$module = 'comanual';
$action = 'update';

// var
//GET
$comanualId = $_GET['comanualId'];
//POSt
$comanualName = $_POST['comanualName'];
$comanualText = $_POST['comanualText'];
$comanualCo = $_POST['comanualCo'];

// update

$update = $manuales -> prepare ("
    UPDATE comanual
    SET
    comanualName = ?,
    comanualText = ?,
    comanualCo = ?
    WHERE
    comanualId = ?
");	

$update -> bind_param (
    "sssi",
    $comanualName, $comanualText, $comanualCo, $comanualId 
);

$update -> execute();

// trace

$trace = $master -> prepare ("
    INSERT INTO trace
    (userId, module, action, itemId)
    VALUES
    (?,?,?,?)
");

$trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $comanualId );

$trace -> execute();

// view

echo "<script> window.location='../c/{$module}.php?m=index&n=updated'</script>";
