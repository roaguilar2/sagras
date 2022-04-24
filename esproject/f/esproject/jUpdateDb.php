<?php

// module
$module = 'esproject';

/*
 * Incluye y evalúa el archivo especificado.
 */
include '../connection.php';

// var
$esprojectName = filter_var($_POST['d'], FILTER_SANITIZE_STRING);
$esprojecttext = filter_var($_POST['esprojectText'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE esproject
    SET
    esprojectName = ?,
    esprojecttext = ?
    WHERE
    esprojectId = ?
");	

$update -> bind_param (
    "ssi",
    $esprojectName, $esprojecttext, $_GET["cid"]
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

    
    
    