<?php

// connection

include '../connection.php';

// module

$module = 'test';
$action = 'update';

// var

$testName = filter_var($_POST['testName'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE test
    SET
    testName = ?
    WHERE
    testId = ?
");	

$update -> bind_param (
    "si",
    $testName, $_GET["id"]
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
