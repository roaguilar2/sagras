<?php

// connection

include '../connection.php';

// module

$module = 'handbook';
$action = 'add';

// var

$handbookName = filter_var($_POST['handbookName'], FILTER_SANITIZE_STRING);

// verify

$_handbook = mysqli_query($master, "
    SELECT * FROM handbook
    WHERE handbookName = '" . $handbookName . "'
    AND handbookStatus = 1
");

$handbook = $_handbook -> fetch_object();

$handbookDb = $handbook -> handbookName;

if (strcasecmp($handbookName, $handbookDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO handbook
        (handbookName)
        VALUES
        (?)
    ");

    $insert -> bind_param (
        "s",
        $handbookName
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
