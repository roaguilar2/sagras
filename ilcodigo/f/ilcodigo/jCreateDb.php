<?php

// connection

include '../connection.php';

// module

$module = 'ilcodigo';
$action = 'add';

// var
$ilcodigoName = filter_var($_POST['ilcodigoName'], FILTER_SANITIZE_STRING);
$ilcodigoText = filter_var($_POST['ilcodigoText'], FILTER_SANITIZE_STRING);


// verify

$_ilcodigo = mysqli_query($master, "
    SELECT * FROM ilcodigo
    WHERE ilcodigoName = '" . $ilcodigoName . "'
    AND ilcodigoStatus = 1
");

$ilcodigo = $_ilcodigo -> fetch_object();

$ilcodigoDb = $ilcodigo -> ilcodigoName;

if (strcasecmp($ilcodigoName, $ilcodigoDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO ilcodigo
        (ilcodigoName, ilcodigoText)
        VALUES
        (?,?)
    ");

    $insert -> bind_param (
        "ss",
        $ilcodigoName, $ilcodigoText
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
