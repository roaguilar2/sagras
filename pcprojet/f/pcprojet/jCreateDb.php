<?php

// connection

include '../connection.php';

// module

$module = 'pcproject';
$action = 'add';

// var
$pcprojectName = filter_var($_POST['pcprojectName'], FILTER_SANITIZE_STRING);
$pcprojectText = filter_var($_POST['pcprojectText'], FILTER_SANITIZE_STRING);


// verify

$_pcproject = mysqli_query($master, "
    SELECT * FROM pcproject
    WHERE pcprojectName = '" . $pcprojectName . "'
    AND pcprojectStatus = 1
");

$pcproject = $_pcproject -> fetch_object();

$pcprojectDb = $pcproject -> pcprojectName;

if (strcasecmp($pcprojectName, $pcprojectDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO pcproject
        (pcprojectName, pcprojectText)
        VALUES
        (?,?)
    ");

    $insert -> bind_param (
        "ss",
        $pcprojectName, $pcprojectText
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
