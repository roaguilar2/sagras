<?php

// connection

include '../connection.php';

// module

$module = 'request';
$action = 'add';

// var

$requestName = filter_var($_POST['requestName'], FILTER_SANITIZE_STRING);

// verify

$_request = mysqli_query($master, "
    SELECT * FROM request
    WHERE requestName = '" . $requestName . "'
    AND requestStatus = 1
");

$request = $_request -> fetch_object();

$requestDb = $request -> requestName;

if (strcasecmp($requestName, $requestDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO request
        (requestName)
        VALUES
        (?)
    ");

    $insert -> bind_param (
        "s",
        $requestName
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
