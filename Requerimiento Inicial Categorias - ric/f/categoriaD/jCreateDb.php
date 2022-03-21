<?php

// connection

include '../connection.php';

// module

$module = 'ric';
$action = 'add';

// var

$d = $_POST['diagnostico'];
$categoriasName = filter_var($_POST['categoriasName'], FILTER_SANITIZE_STRING);
$categoriasExp = filter_var($_POST['categoriasExp'], FILTER_SANITIZE_STRING);

// verify

$_categorias = mysqli_query($master, "
    SELECT * FROM categorias
    WHERE categoriasName = '" . $categoriasName . "'
    AND categoriasStatus = 1
    AND diagnosticoId = '" . $d . "'
");

$categorias = $_categorias -> fetch_object();

$categoriasDb = $categorias -> categoriasName;

if (strcasecmp($categoriasName, $categoriasDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO categorias
        (categoriasName, diagnosticoId, categoriasExp)
        VALUES
        (?,?,?)
    ");

    $insert -> bind_param (
        "sis",
        $categoriasName, $d, $categoriasExp
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
