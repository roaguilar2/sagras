<?php

// connection

include '../connection.php';

// module

$module = 'requerimiento';
$action = 'add';

// var
$requerimientoName = $_POST['requerimientoName'];
$requerimientoText = $_POST['requerimientoText'];
$serviceId = $_POST['serviceId'];
$nrequerimiento = $_POST['nrequerimiento'];


// verify

$_requerimiento = mysqli_query($master, "
    SELECT * FROM requerimiento
    WHERE requerimientoName = '" . $requerimientoName . "'
    AND requerimientoStatus = 1
");

$requerimiento = $_requerimiento -> fetch_object();

$requerimientoDb = $requerimiento -> requerimientoName;

if (strcasecmp($requerimientoName, $requerimientoDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO requerimiento
        (requerimientoName, requerimientoText,serviceId, nrequerimiento)
        VALUES
        (?,?,?,?)
    ");

    $insert -> bind_param (
        "ssis",
        $requerimientoName, $requerimientoText, $serviceId, $nrequerimiento
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
