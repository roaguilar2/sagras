<?php

// module
$module = 'tdatos';

/*
 * Incluye y evalúa el archivo especificado.
 */
include '../connection.php';

// var
$tdatosName = filter_var($_POST['d'], FILTER_SANITIZE_STRING);
$tdatostext = filter_var($_POST['tdatosText'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE tdatos
    SET
    tdatosName = ?,
    tdatostext = ?
    WHERE
    tdatosId = ?
");	

$update -> bind_param (
    "ssi",
    $tdatosName, $tdatostext, $_GET["cid"]
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

    
    
    