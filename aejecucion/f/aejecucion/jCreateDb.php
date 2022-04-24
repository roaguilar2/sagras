<?php

// connection

include '../connection.php';

// module

$module = 'aejecucion';
$action = 'add';

// var
$aejecucionName = filter_var($_POST['aejecucionName'], FILTER_SANITIZE_STRING);
$aejecucionText = filter_var($_POST['aejecucionText'], FILTER_SANITIZE_STRING);


// verify

$_aejecucion = mysqli_query($master, "
    SELECT * FROM aejecucion
    WHERE aejecucionName = '" . $aejecucionName . "'
    AND aejecucionStatus = 1
");

$aejecucion = $_aejecucion -> fetch_object();

$aejecucionDb = $aejecucion -> aejecucionName;

if (strcasecmp($aejecucionName, $aejecucionDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO aejecucion
        (aejecucionName, aejecucionText)
        VALUES
        (?,?)
    ");

    $insert -> bind_param (
        "ss",
        $aejecucionName, $aejecucionText
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
