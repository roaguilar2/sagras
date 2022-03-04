<?php

// connection

include '../connection.php';

// module

$module = 'handbook';
$action = 'update';

// var

$handbookName = filter_var($_POST['handbookName'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE handbook
    SET
    handbookName = ?
    WHERE
    handbookId = ?
");	

$update -> bind_param (
    "si",
    $handbookName, $_GET["id"]
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
