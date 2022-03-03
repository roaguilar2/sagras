<?php

// connection

include '../connection.php';

// module

$module = 'modal';
$action = 'add';

// var

$modalName = filter_var($_POST['modalName'], FILTER_SANITIZE_STRING);

// verify

$_modal = mysqli_query($master, "
    SELECT * FROM modal
    WHERE modalName = '" . $modalName . "'
    AND modalStatus = 1
");

$modal = $_modal -> fetch_object();

$modalDb = $modal -> modalName;

if (strcasecmp($modalName, $modalDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO modal
        (modalName)
        VALUES
        (?)
    ");

    $insert -> bind_param (
        "s",
        $modalName
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
