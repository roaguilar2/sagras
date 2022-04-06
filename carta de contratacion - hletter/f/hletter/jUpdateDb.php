<?php

// connection

include '../connection.php';

// module

$module = 'hletter';
$action = 'update';

// var

$hletterName = filter_var($_POST['hletterName'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE hletter
    SET
    hletterName = ?
    WHERE
    hletterId = ?
");	

$update -> bind_param (
    "si",
    $hletterName, $_GET["id"]
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
