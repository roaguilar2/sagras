<?php

// module
$module = 'compromiso';

/*
 * Incluye y evalúa el archivo especificado.
 */
include '../connection.php';

// var
$compromisoName = filter_var($_POST['d'], FILTER_SANITIZE_STRING);
$compromisotext = filter_var($_POST['compromisoText'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE compromiso
    SET
    compromisoName = ?,
    compromisotext = ?
    WHERE
    compromisoId = ?
");	

$update -> bind_param (
    "ssi",
    $compromisoName, $compromisotext, $_GET["cid"]
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

    
    
    