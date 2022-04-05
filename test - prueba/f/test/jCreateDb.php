<?php

// connection

include '../connection.php';

// module

$module = 'test';
$action = 'add';

// var

$testName = filter_var($_POST['testName'], FILTER_SANITIZE_STRING);

// verify

$_test = mysqli_query($master, "
    SELECT * FROM test
    WHERE testName = '" . $testName . "'
    AND testStatus = 1
");

$test = $_test -> fetch_object();

$testDb = $test -> testName;

if (strcasecmp($testName, $testDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO test
        (testName)
        VALUES
        (?)
    ");

    $insert -> bind_param (
        "s",
        $testName
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
