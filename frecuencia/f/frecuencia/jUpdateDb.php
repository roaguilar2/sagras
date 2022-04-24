<?php

// module
$module = 'frecuencia';

/*
 * Incluye y evalúa el archivo especificado.
 */
include '../connection.php';

// var
$frecuenciaName = filter_var($_POST['d'], FILTER_SANITIZE_STRING);
$frecuenciatext = filter_var($_POST['frecuenciaText'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE frecuencia
    SET
    frecuenciaName = ?,
    frecuenciatext = ?
    WHERE
    frecuenciaId = ?
");	

$update -> bind_param (
    "ssi",
    $frecuenciaName, $frecuenciatext, $_GET["cid"]
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

    
    
    