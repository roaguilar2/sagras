<?php

// connection

include '../connection.php';

// module

$module = 'frecuencia';
$action = 'add';

// var
$frecuenciaName = filter_var($_POST['frecuenciaName'], FILTER_SANITIZE_STRING);
$frecuenciaText = filter_var($_POST['frecuenciaText'], FILTER_SANITIZE_STRING);


// verify

$_frecuencia = mysqli_query($master, "
    SELECT * FROM frecuencia
    WHERE frecuenciaName = '" . $frecuenciaName . "'
    AND frecuenciaStatus = 1
");

$frecuencia = $_frecuencia -> fetch_object();

$frecuenciaDb = $frecuencia -> frecuenciaName;

if (strcasecmp($frecuenciaName, $frecuenciaDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO frecuencia
        (frecuenciaName, frecuenciaText)
        VALUES
        (?,?)
    ");

    $insert -> bind_param (
        "ss",
        $frecuenciaName, $frecuenciaText
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
