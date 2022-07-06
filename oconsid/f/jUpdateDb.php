<?php

// module
$module = 'requerimiento';

/*
 * Incluye y evalúa el archivo especificado.
 */
include '../connection.php';

// var
$requerimientoName = filter_var($_POST['d'], FILTER_SANITIZE_STRING);
$requerimientotext = filter_var($_POST['requerimientoText'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE requerimiento
    SET
    requerimientoName = ?,
    requerimientotext = ?
    WHERE
    requerimientoId = ?
");	

$update -> bind_param (
    "ssi",
    $requerimientoName, $requerimientotext, $_GET["cid"]
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

    
    
    