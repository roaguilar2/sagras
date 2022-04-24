<?php

// module
$module = 'ilcodigo';

/*
 * Incluye y evalúa el archivo especificado.
 */
include '../connection.php';

// var
$ilcodigoName = filter_var($_POST['d'], FILTER_SANITIZE_STRING);
$ilcodigotext = filter_var($_POST['ilcodigoText'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE ilcodigo
    SET
    ilcodigoName = ?,
    ilcodigotext = ?
    WHERE
    ilcodigoId = ?
");	

$update -> bind_param (
    "ssi",
    $ilcodigoName, $ilcodigotext, $_GET["cid"]
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

    
    
    