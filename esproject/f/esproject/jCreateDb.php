<?php

// connection

include '../connection.php';

// module

$module = 'esproject';
$action = 'add';

// var
$esprojectName = filter_var($_POST['esprojectName'], FILTER_SANITIZE_STRING);
$esprojectText = filter_var($_POST['esprojectText'], FILTER_SANITIZE_STRING);


// verify

$_esproject = mysqli_query($master, "
    SELECT * FROM esproject
    WHERE esprojectName = '" . $esprojectName . "'
    AND esprojectStatus = 1
");

$esproject = $_esproject -> fetch_object();

$esprojectDb = $esproject -> esprojectName;

if (strcasecmp($esprojectName, $esprojectDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO esproject
        (esprojectName, esprojectText)
        VALUES
        (?,?)
    ");

    $insert -> bind_param (
        "ss",
        $esprojectName, $esprojectText
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
