<?php

// connection

include '../connection.php';

// module

$module = 'ningreso';
$action = 'add';

// var

$ningresoName = filter_var($_POST['ningresoName'], FILTER_SANITIZE_STRING);

// verify

$_ningreso = mysqli_query($master, "
    SELECT * FROM ningreso
    WHERE ningresoName = '" . $ningresoName . "'
    AND ningresoStatus = 1
");

$ningreso = $_ningreso -> fetch_object();

$ningresoDb = $ningreso -> ningresoName;

if (strcasecmp($ningresoName, $ningresoDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO ningreso
        (ningresoName)
        VALUES
        (?)
    ");

    $insert -> bind_param (
        "s",
        $ningresoName
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
