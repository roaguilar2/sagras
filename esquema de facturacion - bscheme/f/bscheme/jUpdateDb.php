<?php

// connection

include '../connection.php';

// module

$module = 'bscheme';
$action = 'update';

// var

$bschemeName = filter_var($_POST['bschemeName'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE bscheme
    SET
    bschemeName = ?
    WHERE
    bschemeId = ?
");	

$update -> bind_param (
    "si",
    $bschemeName, $_GET["id"]
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
