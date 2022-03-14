<?php

// connection

include '../connection.php';

// module

$module = 'caproject';
$action = 'add';

// var

$d = $_POST['diagnostico'];
$caprojectsName = filter_var($_POST['caprojectsName'], FILTER_SANITIZE_STRING);
$caprojectsExp = filter_var($_POST['caprojectsExp'], FILTER_SANITIZE_STRING);

// verify

$_caprojects = mysqli_query($master, "
    SELECT * FROM caprojects
    WHERE caprojectsName = '" . $caprojectsName . "'
    AND caprojectsStatus = 1
    AND diagnosticoId = '" . $d . "'
");

$caprojects = $_caprojects -> fetch_object();

$caprojectsDb = $caprojects -> caprojectsName;

if (strcasecmp($caprojectsName, $caprojectsDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO caprojects
        (caprojectsName, diagnosticoId, caprojectsExp)
        VALUES
        (?,?,?)
    ");

    $insert -> bind_param (
        "sis",
        $caprojectsName, $d, $caprojectsExp
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

    echo "<script> window.location='../c/{$module}.php?m=list&n=added&pid={$d}'</script>";
    
}
else {

    echo "<script> window.location='../c/{$module}.php?m=list&n=duplicated&pid={$d}'</script>";

}
