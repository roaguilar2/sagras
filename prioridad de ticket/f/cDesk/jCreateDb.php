<?php

// connection

include '../connection.php';

// module

$module = 'pticket';
$action = 'add';

// var

$pticketName = filter_var($_POST['pticketName'], FILTER_SANITIZE_STRING);

// verify

$_pticket = mysqli_query($master, "
    SELECT * FROM pticket
    WHERE pticketName = '" . $pticketName . "'
    AND pticketStatus = 1
");

$pticket = $_pticket -> fetch_object();

$pticketDb = $pticket -> pticketName;

if (strcasecmp($pticketName, $pticketDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO pticket
        (pticketName)
        VALUES
        (?)
    ");

    $insert -> bind_param (
        "s",
        $pticketName
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
