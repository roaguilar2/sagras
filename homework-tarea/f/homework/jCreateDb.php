<?php

// connection

include '../connection.php';

// module

$module = 'homework';
$action = 'add';

// var

$homeworkName = filter_var($_POST['homeworkName'], FILTER_SANITIZE_STRING);

// verify

$_homework = mysqli_query($master, "
    SELECT * FROM homework
    WHERE homeworkName = '" . $homeworkName . "'
    AND homeworkStatus = 1
");

$homework = $_homework -> fetch_object();

$homeworkDb = $homework -> homeworkName;

if (strcasecmp($homeworkName, $homeworkDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO homework
        (homeworkName)
        VALUES
        (?)
    ");

    $insert -> bind_param (
        "s",
        $homeworkName
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
