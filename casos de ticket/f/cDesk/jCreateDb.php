<?php

// connection

include '../connection.php';

// module

$module = 'cticket';
$action = 'add';

// var

$cticketName = filter_var($_POST['cticketName'], FILTER_SANITIZE_STRING);

// verify

$_cticket = mysqli_query($master, "
    SELECT * FROM cticket
    WHERE cticketName = '" . $cticketName . "'
    AND cticketStatus = 1
");

$cticket = $_cticket -> fetch_object();

$cticketDb = $cticket -> cticketName;

if (strcasecmp($cticketName, $cticketDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO cticket
        (cticketName)
        VALUES
        (?)
    ");

    $insert -> bind_param (
        "s",
        $cticketName
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
