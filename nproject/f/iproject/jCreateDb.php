<?php

// connection

include '../connection.php';

// module

$module = 'nproject';
$action = 'add';

// var
$nprojectName = filter_var($_POST['nprojectName'], FILTER_SANITIZE_STRING);
$nprojectText = filter_var($_POST['nprojectText'], FILTER_SANITIZE_STRING);


// verify

$_nproject = mysqli_query($master, "
    SELECT * FROM nproject
    WHERE nprojectName = '" . $nprojectName . "'
    AND nprojectStatus = 1
");

$nproject = $_nproject -> fetch_object();

$nprojectDb = $nproject -> nprojectName;

if (strcasecmp($nprojectName, $nprojectDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO nproject
        (nprojectName, nprojectText)
        VALUES
        (?,?)
    ");

    $insert -> bind_param (
        "ss",
        $nprojectName, $nprojectText
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
