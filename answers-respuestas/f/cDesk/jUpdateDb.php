<?php

// connection

include '../connection.php';

// module

$module = 'answers';
$action = 'update';

// var

$answersName = filter_var($_POST['answersName'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE answers
    SET
    answersName = ?
    WHERE
    answersId = ?
");	

$update -> bind_param (
    "si",
    $answersName, $_GET["id"]
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
