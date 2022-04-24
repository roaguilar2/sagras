<?php

// connection

include '../connection.php';

// module

$module = 'compromiso';
$action = 'add';

// var
$compromisoName = filter_var($_POST['compromisoName'], FILTER_SANITIZE_STRING);
$compromisoText = filter_var($_POST['compromisoText'], FILTER_SANITIZE_STRING);


// verify

$_compromiso = mysqli_query($master, "
    SELECT * FROM compromiso
    WHERE compromisoName = '" . $compromisoName . "'
    AND compromisoStatus = 1
");

$compromiso = $_compromiso -> fetch_object();

$compromisoDb = $compromiso -> compromisoName;

if (strcasecmp($compromisoName, $compromisoDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO compromiso
        (compromisoName, compromisoText)
        VALUES
        (?,?)
    ");

    $insert -> bind_param (
        "ss",
        $compromisoName, $compromisoText
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
