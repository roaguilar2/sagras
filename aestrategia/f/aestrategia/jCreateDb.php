<?php

// connection

include '../connection.php';

// module

$module = 'aestrategia';
$action = 'add';

// var
$aestrategiaName = filter_var($_POST['aestrategiaName'], FILTER_SANITIZE_STRING);
$aestrategiaText = filter_var($_POST['aestrategiaText'], FILTER_SANITIZE_STRING);


// verify

$_aestrategia = mysqli_query($master, "
    SELECT * FROM aestrategia
    WHERE aestrategiaName = '" . $aestrategiaName . "'
    AND aestrategiaStatus = 1
");

$aestrategia = $_aestrategia -> fetch_object();

$aestrategiaDb = $aestrategia -> aestrategiaName;

if (strcasecmp($aestrategiaName, $aestrategiaDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO aestrategia
        (aestrategiaName, aestrategiaText)
        VALUES
        (?,?)
    ");

    $insert -> bind_param (
        "ss",
        $aestrategiaName, $aestrategiaText
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
