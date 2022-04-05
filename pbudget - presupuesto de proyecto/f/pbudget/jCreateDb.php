<?php

// connection

include '../connection.php';

// module

$module = 'pbudget';
$action = 'add';

// var

$pbudgetName = filter_var($_POST['pbudgetName'], FILTER_SANITIZE_STRING);

// verify

$_pbudget = mysqli_query($master, "
    SELECT * FROM pbudget
    WHERE pbudgetName = '" . $pbudgetName . "'
    AND pbudgetStatus = 1
");

$pbudget = $_pbudget -> fetch_object();

$pbudgetDb = $pbudget -> pbudgetName;

if (strcasecmp($pbudgetName, $pbudgetDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO pbudget
        (pbudgetName)
        VALUES
        (?)
    ");

    $insert -> bind_param (
        "s",
        $pbudgetName
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
