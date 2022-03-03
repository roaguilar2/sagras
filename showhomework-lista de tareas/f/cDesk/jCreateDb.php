<?php

// connection

include '../connection.php';

// module

$module = 'showhomework';
$action = 'add';

// var

$showhomeworkName = filter_var($_POST['showhomeworkName'], FILTER_SANITIZE_STRING);

// verify

$_showhomework = mysqli_query($master, "
    SELECT * FROM showhomework
    WHERE showhomeworkName = '" . $showhomeworkName . "'
    AND showhomeworkStatus = 1
");

$showhomework = $_showhomework -> fetch_object();

$showhomeworkDb = $showhomework -> showhomeworkName;

if (strcasecmp($showhomeworkName, $showhomeworkDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO showhomework
        (showhomeworkName)
        VALUES
        (?)
    ");

    $insert -> bind_param (
        "s",
        $showhomeworkName
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
