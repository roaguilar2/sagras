<?php

// connection

include '../connection.php';

// module

$module = 'requerimiento';
$action = 'add';

// var
$requerimientoName = filter_var($_POST['requerimientoName'], FILTER_SANITIZE_STRING);
$requerimientoText = filter_var($_POST['requerimientoText'], FILTER_SANITIZE_STRING);


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
        (requerimientoName, requerimientoText)
        VALUES
        (?,?)
    ");

    $insert -> bind_param (
        "ss",
        $requerimientoName, $requerimientoText
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
