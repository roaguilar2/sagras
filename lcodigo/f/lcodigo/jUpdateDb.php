<?php

// module
$module = 'lcodigo';

/*
 * Incluye y evalúa el archivo especificado.
 */
include '../connection.php';

// var
$lcodigoName = filter_var($_POST['d'], FILTER_SANITIZE_STRING);
$lcodigotext = filter_var($_POST['lcodigoText'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE lcodigo
    SET
    lcodigoName = ?,
    lcodigotext = ?
    WHERE
    lcodigoId = ?
");	

$update -> bind_param (
    "ssi",
    $lcodigoName, $lcodigotext, $_GET["cid"]
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

    
    
    