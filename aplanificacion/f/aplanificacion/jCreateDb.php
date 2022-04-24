<?php

// connection

include '../connection.php';

// module

$module = 'aplanificacion';
$action = 'add';

// var
$aplanificacionName = filter_var($_POST['aplanificacionName'], FILTER_SANITIZE_STRING);
$aplanificacionText = filter_var($_POST['aplanificacionText'], FILTER_SANITIZE_STRING);


// verify

$_aplanificacion = mysqli_query($master, "
    SELECT * FROM aplanificacion
    WHERE aplanificacionName = '" . $aplanificacionName . "'
    AND aplanificacionStatus = 1
");

$aplanificacion = $_aplanificacion -> fetch_object();

$aplanificacionDb = $aplanificacion -> aplanificacionName;

if (strcasecmp($aplanificacionName, $aplanificacionDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO aplanificacion
        (aplanificacionName, aplanificacionText)
        VALUES
        (?,?)
    ");

    $insert -> bind_param (
        "ss",
        $aplanificacionName, $aplanificacionText
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
