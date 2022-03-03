<?php

// connection

include '../connection.php';

// module

$module = 'instructions';
$action = 'add';

// var

$instructionsName = filter_var($_POST['instructionsName'], FILTER_SANITIZE_STRING);

// verify

$_instructions = mysqli_query($master, "
    SELECT * FROM instructions
    WHERE instructionsName = '" . $instructionsName . "'
    AND instructionsStatus = 1
");

$instructions = $_instructions -> fetch_object();

$instructionsDb = $instructions -> instructionsName;

if (strcasecmp($instructionsName, $instructionsDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO instructions
        (instructionsName)
        VALUES
        (?)
    ");

    $insert -> bind_param (
        "s",
        $instructionsName
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
