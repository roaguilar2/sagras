<?php

// connection

include '../connection.php';

// module

$module = 'mtproject';
$action = 'add';

// var
$mtprojectName = filter_var($_POST['mtprojectName'], FILTER_SANITIZE_STRING);
$mtprojectText = filter_var($_POST['mtprojectText'], FILTER_SANITIZE_STRING);


// verify

$_mtproject = mysqli_query($master, "
    SELECT * FROM mtproject
    WHERE mtprojectName = '" . $mtprojectName . "'
    AND mtprojectStatus = 1
");

$mtproject = $_mtproject -> fetch_object();

$mtprojectDb = $mtproject -> mtprojectName;

if (strcasecmp($mtprojectName, $mtprojectDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO mtproject
        (mtprojectName, mtprojectText)
        VALUES
        (?,?)
    ");

    $insert -> bind_param (
        "ss",
        $mtprojectName, $mtprojectText
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
