<?php

// connection

include '../connection.php';

// module

$module = 'caproject';
$action = 'add';

// var
$caprojectName = filter_var($_POST['caprojectName'], FILTER_SANITIZE_STRING);
$caprojectText = filter_var($_POST['caprojectText'], FILTER_SANITIZE_STRING);


// verify

$_caproject = mysqli_query($master, "
    SELECT * FROM caproject
    WHERE caprojectName = '" . $caprojectName . "'
    AND caprojectStatus = 1
");

$caproject = $_caproject -> fetch_object();

$caprojectDb = $caproject -> caprojectName;

if (strcasecmp($caprojectName, $caprojectDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO caproject
        (caprojectName, caprojectText)
        VALUES
        (?,?)
    ");

    $insert -> bind_param (
        "ss",
        $caprojectName, $caprojectText
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
