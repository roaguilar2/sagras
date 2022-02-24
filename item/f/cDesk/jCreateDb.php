<?php

// connection

include '../connection.php';

// module

$module = 'item';
$action = 'add';

// var

$itemName = filter_var($_POST['itemName'], FILTER_SANITIZE_STRING);

// verify

$_item = mysqli_query($master, "
    SELECT * FROM item
    WHERE itemName = '" . $itemName . "'
    AND itemStatus = 1
");

$item = $_item -> fetch_object();

$itemDb = $item -> itemName;

if (strcasecmp($itemName, $itemDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO item
        (itemName)
        VALUES
        (?)
    ");

    $insert -> bind_param (
        "s",
        $itemName
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
