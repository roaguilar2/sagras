<?php

// connection

include '../connection.php';

// module

$module = 'quest';
$action = 'add';

// var

$questName = filter_var($_POST['questName'], FILTER_SANITIZE_STRING);

// verify

$_quest = mysqli_query($master, "
    SELECT * FROM quest
    WHERE questName = '" . $questName . "'
    AND questStatus = 1
");

$quest = $_quest -> fetch_object();

$questDb = $quest -> questName;

if (strcasecmp($questName, $questDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO quest
        (questName)
        VALUES
        (?)
    ");

    $insert -> bind_param (
        "s",
        $questName
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
