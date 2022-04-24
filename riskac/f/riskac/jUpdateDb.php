<?php

// module
$module = 'riskac';

/*
 * Incluye y evalúa el archivo especificado.
 */
include '../connection.php';

// var
$riskacName = filter_var($_POST['d'], FILTER_SANITIZE_STRING);
$riskactext = filter_var($_POST['riskacText'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE riskac
    SET
    riskacName = ?,
    riskactext = ?
    WHERE
    riskacId = ?
");	

$update -> bind_param (
    "ssi",
    $riskacName, $riskactext, $_GET["cid"]
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

    
    
    