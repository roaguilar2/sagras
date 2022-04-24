<?php

// connection

include '../connection.php';

// module

$module = 'tdatos';
$action = 'add';

// var
$tdatosName = filter_var($_POST['tdatosName'], FILTER_SANITIZE_STRING);
$tdatosText = filter_var($_POST['tdatosText'], FILTER_SANITIZE_STRING);


// verify

$_tdatos = mysqli_query($master, "
    SELECT * FROM tdatos
    WHERE tdatosName = '" . $tdatosName . "'
    AND tdatosStatus = 1
");

$tdatos = $_tdatos -> fetch_object();

$tdatosDb = $tdatos -> tdatosName;

if (strcasecmp($tdatosName, $tdatosDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO tdatos
        (tdatosName, tdatosText)
        VALUES
        (?,?)
    ");

    $insert -> bind_param (
        "ss",
        $tdatosName, $tdatosText
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
