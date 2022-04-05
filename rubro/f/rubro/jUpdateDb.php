<?php

// connection

include '../connection.php';

// module

$module = 'rubro';
$action = 'update';

// var

$rubroName = filter_var($_POST['rubroName'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE rubro
    SET
    rubroName = ?
    WHERE
    rubroId = ?
");	

$update -> bind_param (
    "si",
    $rubroName, $_GET["id"]
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
