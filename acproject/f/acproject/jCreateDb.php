<?php

// connection

include '../connection.php';

// module

$module = 'acproject';
$action = 'add';

// var
$acprojectName = filter_var($_POST['acprojectName'], FILTER_SANITIZE_STRING);
$acprojectText = filter_var($_POST['acprojectText'], FILTER_SANITIZE_STRING);


// verify

$_acproject = mysqli_query($master, "
    SELECT * FROM acproject
    WHERE acprojectName = '" . $acprojectName . "'
    AND acprojectStatus = 1
");

$acproject = $_acproject -> fetch_object();

$acprojectDb = $acproject -> acprojectName;

if (strcasecmp($acprojectName, $acprojectDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO acproject
        (acprojectName, acprojectText)
        VALUES
        (?,?)
    ");

    $insert -> bind_param (
        "ss",
        $acprojectName, $acprojectText
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
