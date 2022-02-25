<?php

// connection

include '../connection.php';

// module

$module = 'homework';
$action = 'update';

// var

$homeworkName = filter_var($_POST['homeworkName'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE homework
    SET
    homeworkName = ?
    WHERE
    homeworkId = ?
");	

$update -> bind_param (
    "si",
    $homeworkName, $_GET["id"]
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
