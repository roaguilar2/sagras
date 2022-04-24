<?php

// connection

include '../connection.php';

// module

$module = 'riskac';
$action = 'add';

// var
$riskacName = filter_var($_POST['riskacName'], FILTER_SANITIZE_STRING);
$riskacText = filter_var($_POST['riskacText'], FILTER_SANITIZE_STRING);


// verify

$_riskac = mysqli_query($master, "
    SELECT * FROM riskac
    WHERE riskacName = '" . $riskacName . "'
    AND riskacStatus = 1
");

$riskac = $_riskac -> fetch_object();

$riskacDb = $riskac -> riskacName;

if (strcasecmp($riskacName, $riskacDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO riskac
        (riskacName, riskacText)
        VALUES
        (?,?)
    ");

    $insert -> bind_param (
        "ss",
        $riskacName, $riskacText
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
