<?php

// connection

include '../connection.php';

// module

$module = 'ntrabajador';
$action = 'add';

// var

$ntrabajadorName = filter_var($_POST['ntrabajadorName'], FILTER_SANITIZE_STRING);

// verify

$_ntrabajador = mysqli_query($master, "
    SELECT * FROM ntrabajador
    WHERE ntrabajadorName = '" . $ntrabajadorName . "'
    AND ntrabajadorStatus = 1
");

$ntrabajador = $_ntrabajador -> fetch_object();

$ntrabajadorDb = $ntrabajador -> ntrabajadorName;

if (strcasecmp($ntrabajadorName, $ntrabajadorDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO ntrabajador
        (ntrabajadorName)
        VALUES
        (?)
    ");

    $insert -> bind_param (
        "s",
        $ntrabajadorName
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
