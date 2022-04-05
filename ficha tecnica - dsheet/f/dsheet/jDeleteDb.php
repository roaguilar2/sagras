<?php

// connection

include '../connection.php';

// module

$module = 'dsheet';
$action = 'delete';

// var

$dsheetStatus = 0;

if ($_GET["id"] <= 2) {
    
    echo "<script> window.location='../c/{$module}.php?m=index&n=notAllowed'</script>";

}
else {
    
    // update

    $update = $master -> prepare ("
        UPDATE dsheet
        SET
        dsheetStatus = ?
        WHERE
        dsheetId = ?
    ");

    $update -> bind_param (
        "ii",
        $dsheetStatus, $_GET["id"]
    );

    $update -> execute();

    // trace

    $trace = $master -> prepare ("
        INSERT INTO trace
        (dsheetId, module, action, itemId)
        VALUES
        (?,?,?,?)
    ");
    
    $trace -> bind_param ("issi", $_SESSION["dsheetId"], $module, $action, $_GET["id"]);
    
    $trace -> execute();
    
    // view
    
    echo "<script> window.location='../c/{$module}.php?m=index&n=deleted'</script>";
    
}
