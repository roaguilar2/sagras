<?php

// connection

include '../connection.php';

// module

$module = 'hletter';
$action = 'add';

// var

$hletterName = filter_var($_POST['hletterName'], FILTER_SANITIZE_STRING);

// verify

$_hletter = mysqli_query($master, "
    SELECT * FROM hletter
    WHERE hletterName = '" . $hletterName . "'
    AND hletterStatus = 1
");

$hletter = $_hletter -> fetch_object();

$hletterDb = $hletter -> hletterName;

if (strcasecmp($hletterName, $hletterDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO hletter
        (hletterName)
        VALUES
        (?)
    ");

    $insert -> bind_param (
        "s",
        $hletterName
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
