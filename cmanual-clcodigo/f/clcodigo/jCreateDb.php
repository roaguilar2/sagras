<?php

// connection

include '../connection.php';

// module

$module = 'clcodigo';
$action = 'add';

// var

$d = $_POST['manual'];
$clcodigoName = filter_var($_POST['clcodigoName'], FILTER_SANITIZE_STRING);
$clcodigoExp = filter_var($_POST['clcodigoExp'], FILTER_SANITIZE_STRING);

// verify

$_clcodigo = mysqli_query($master, "
    SELECT * FROM clcodigo
    WHERE clcodigoName = '" . $clcodigoName . "'
    AND clcodigoStatus = 1
    AND manualId = '" . $d . "'
");

$clcodigo = $_clcodigo -> fetch_object();

$clcodigoDb = $clcodigo -> clcodigoName;

if (strcasecmp($clcodigoName, $clcodigoDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO clcodigo
        (clcodigoName, manualId, clcodigoExp)
        VALUES
        (?,?,?)
    ");

    $insert -> bind_param (
        "sis",
        $clcodigoName, $d, $clcodigoExp
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

    echo "<script> window.location='../c/{$module}.php?m=list&n=added&pid={$d}'</script>";
    
}
else {

    echo "<script> window.location='../c/{$module}.php?m=list&n=duplicated&pid={$d}'</script>";

}
