<?php

// connection

include '../connection.php';

// module

$module = 'rubro';
$action = 'add';

// var

$rubroName = filter_var($_POST['rubroName'], FILTER_SANITIZE_STRING);

// verify

$_rubro = mysqli_query($master, "
    SELECT * FROM rubro
    WHERE rubroName = '" . $rubroName . "'
    AND rubroStatus = 1
");

$rubro = $_rubro -> fetch_object();

$rubroDb = $rubro -> rubroName;

if (strcasecmp($rubroName, $rubroDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO rubro
        (rubroName)
        VALUES
        (?)
    ");

    $insert -> bind_param (
        "s",
        $rubroName
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
