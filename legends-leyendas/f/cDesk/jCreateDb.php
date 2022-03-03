<?php

// connection

include '../connection.php';

// module

$module = 'legends';
$action = 'add';

// var

$legendsName = filter_var($_POST['legendsName'], FILTER_SANITIZE_STRING);

// verify

$_legends = mysqli_query($master, "
    SELECT * FROM legends
    WHERE legendsName = '" . $legendsName . "'
    AND legendsStatus = 1
");

$legends = $_legends -> fetch_object();

$legendsDb = $legends -> legendsName;

if (strcasecmp($legendsName, $legendsDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO legends
        (legendsName)
        VALUES
        (?)
    ");

    $insert -> bind_param (
        "s",
        $legendsName
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
