<?php

// connection

include '../connection.php';

// module

$module = 'cconsulta';
$action = 'add';

// var

$cconsultaName = filter_var($_POST['cconsultaName'], FILTER_SANITIZE_STRING);

// verify

$_cconsulta = mysqli_query($master, "
    SELECT * FROM cconsulta
    WHERE cconsultaName = '" . $cconsultaName . "'
    AND cconsultaStatus = 1
");

$cconsulta = $_cconsulta -> fetch_object();

$cconsultaDb = $cconsulta -> cconsultaName;

if (strcasecmp($cconsultaName, $cconsultaDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO cconsulta
        (cconsultaName)
        VALUES
        (?)
    ");

    $insert -> bind_param (
        "s",
        $cconsultaName
    );

    $insert -> execute();
    
    $id = $master -> insert_id;
    
    // trace

    $trace = $master -> prepare ("
    	INSERT INTO trace
    	(userId, module, action, itemId)
    	VALUES
    	(?,?,?,?)
    ");

    $trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $id);

    $trace -> execute();

    // view

    echo "<script> window.location='../c/{$module}.php?m=index&n=added'</script>";
    
}
else {

    echo "<script> window.location='../c/{$module}.php?m=index&n=duplicated'</script>";

}
