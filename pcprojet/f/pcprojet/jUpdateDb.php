<?php

// module
$module = 'pcproject';

/*
 * Incluye y evalúa el archivo especificado.
 */
include '../connection.php';

// var
$pcprojectName = filter_var($_POST['d'], FILTER_SANITIZE_STRING);
$pcprojecttext = filter_var($_POST['pcprojectText'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE pcproject
    SET
    pcprojectName = ?,
    pcprojecttext = ?
    WHERE
    pcprojectId = ?
");	

$update -> bind_param (
    "ssi",
    $pcprojectName, $pcprojecttext, $_GET["cid"]
);

$update -> execute();

// trace

$trace = $master -> prepare ("
    INSERT INTO trace
    (userId, module, action, itemId)
    VALUES
    (?,?,?,?)
");

$trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $_GET["cid"]);

$trace -> execute();


// view

echo "<script> window.location='../c/{$module}.php?m=index&n=updated'</script>";

    
    
    