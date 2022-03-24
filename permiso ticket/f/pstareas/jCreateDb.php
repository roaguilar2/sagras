<?php

// connection

include '../connection.php';

// module

$module = 'permiso';
$action = 'add';

$c = $_POST['moduleId'];
$s =  $_SESSION["subscriberId"];
// var

$insert = $master -> prepare ("
INSERT INTO permisom
(moduleId, subscriberId)
VALUES
(?,?)
");

$insert -> bind_param (
"ii",
 $c, $s
);
$insert -> execute();

$trace = $master -> prepare ("
INSERT INTO trace
(userId, module, action, itemId)
VALUES
(?,?,?,?)
");

$trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $id);

$trace -> execute();

// view

echo "<script> window.location='../c/{$module}.php?m=index&n=added'</script>";