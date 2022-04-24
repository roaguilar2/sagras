<?php

// connection

include '../connection.php';

// module

$module = 'ccproject';
$action = 'add';

// var
$ccprojectName = filter_var($_POST['ccprojectName'], FILTER_SANITIZE_STRING);
$ccprojectText = filter_var($_POST['ccprojectText'], FILTER_SANITIZE_STRING);
$ccprojectText2 = filter_var($_POST['ccprojectText2'], FILTER_SANITIZE_STRING);

// verify

$_ccproject = mysqli_query($master, "
    SELECT * FROM ccproject
    WHERE ccprojectName = '" . $ccprojectName . "'
    AND ccprojectStatus = 1
");

$ccproject = $_ccproject -> fetch_object();

$ccprojectDb = $ccproject -> ccprojectName;

if (strcasecmp($ccprojectName, $ccprojectDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO ccproject
        (ccprojectName, ccprojectText, ccprojectText2)
        VALUES
        (?,?,?)
    ");

    $insert -> bind_param (
        "sss",
        $ccprojectName, $ccprojectText, $ccprojectText2
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
