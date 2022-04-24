<?php

// connection

include '../connection.php';

// module

$module = 'pcontrol';
$action = 'add';

// var
$pcontrolName = filter_var($_POST['pcontrolName'], FILTER_SANITIZE_STRING);
$pcontrolText = filter_var($_POST['pcontrolText'], FILTER_SANITIZE_STRING);


// verify

$_pcontrol = mysqli_query($master, "
    SELECT * FROM pcontrol
    WHERE pcontrolName = '" . $pcontrolName . "'
    AND pcontrolStatus = 1
");

$pcontrol = $_pcontrol -> fetch_object();

$pcontrolDb = $pcontrol -> pcontrolName;

if (strcasecmp($pcontrolName, $pcontrolDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO pcontrol
        (pcontrolName, pcontrolText)
        VALUES
        (?,?)
    ");

    $insert -> bind_param (
        "ss",
        $pcontrolName, $pcontrolText
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
