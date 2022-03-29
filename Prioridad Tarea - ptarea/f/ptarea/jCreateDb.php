<?php

// connection

include '../connection.php';

// module

$module = 'ptarea';
$action = 'add';

// var

$ptareaName = filter_var($_POST['ptareaName'], FILTER_SANITIZE_STRING);

// verify

$_ptarea = mysqli_query($master, "
    SELECT * FROM ptarea
    WHERE ptareaName = '" . $ptareaName . "'
    AND ptareaStatus = 1
");

$ptarea = $_ptarea -> fetch_object();

$ptareaDb = $ptarea -> ptareaName;

if (strcasecmp($ptareaName, $ptareaDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO ptarea
        (ptareaName)
        VALUES
        (?)
    ");

    $insert -> bind_param (
        "s",
        $ptareaName
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
