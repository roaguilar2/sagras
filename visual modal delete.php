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
$s = 0;
// update

$update = $manuales -> prepare ("
    UPDATE comanual
    SET
    comanualStatus = ?
    WHERE
    comanualId = ?
");	

$update -> bind_param (
    "ii",
    $s , $comanualId 
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
