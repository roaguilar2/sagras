<?php

// connection

include '../connection.php';

// module

$module = 'iproject';
$action = 'add';

// var
$lcodigo = filter_var($_POST['lcodigo'], FILTER_SANITIZE_STRING);
$iprojectText = filter_var($_POST['iprojectText'], FILTER_SANITIZE_STRING);


// verify

$_iproject = mysqli_query($master, "
    SELECT * FROM iproject
    WHERE lcodigo = '" . $lcodigo . "'
    AND iprojectStatus = 1
");

$iproject = $_iproject -> fetch_object();

$iprojectDb = $iproject -> lcodigo;

if (strcasecmp($lcodigo, $iprojectDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO iproject
        (lcodigo, iprojectText)
        VALUES
        (?,?)
    ");

    $insert -> bind_param (
        "ss",
        $lcodigo, $iprojectText
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
