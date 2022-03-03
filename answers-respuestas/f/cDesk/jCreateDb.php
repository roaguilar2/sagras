<?php

// connection

include '../connection.php';

// module

$module = 'answers';
$action = 'add';

// var

$answersName = filter_var($_POST['answersName'], FILTER_SANITIZE_STRING);

// verify

$_answers = mysqli_query($master, "
    SELECT * FROM answers
    WHERE answersName = '" . $answersName . "'
    AND answersStatus = 1
");

$answers = $_answers -> fetch_object();

$answersDb = $answers -> answersName;

if (strcasecmp($answersName, $answersDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO answers
        (answersName)
        VALUES
        (?)
    ");

    $insert -> bind_param (
        "s",
        $answersName
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
