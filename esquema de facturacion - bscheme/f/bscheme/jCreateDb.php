<?php

// connection

include '../connection.php';

// module

$module = 'bscheme';
$action = 'add';

// var

$bschemeName = filter_var($_POST['bschemeName'], FILTER_SANITIZE_STRING);

// verify

$_bscheme = mysqli_query($master, "
    SELECT * FROM bscheme
    WHERE bschemeName = '" . $bschemeName . "'
    AND bschemeStatus = 1
");

$bscheme = $_bscheme -> fetch_object();

$bschemeDb = $bscheme -> bschemeName;

if (strcasecmp($bschemeName, $bschemeDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO bscheme
        (bschemeName)
        VALUES
        (?)
    ");

    $insert -> bind_param (
        "s",
        $bschemeName
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
