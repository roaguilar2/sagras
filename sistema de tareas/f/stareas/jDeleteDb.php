<?php

// connection

include '../connection.php';

// module

$module = 'blog';
$action = 'delete';

// var

$blogStatus = 0;

// update

$update = $master -> prepare ("
    UPDATE blog
    SET
    blogStatus = ?
    WHERE
    blogId = ?
");

$update -> bind_param (
    "ii",
    $blogStatus, $_GET["id"]
);

$update -> execute();

// trace

$trace = $master -> prepare ("
    INSERT INTO trace
    (userId, module, action, itemId)
    VALUES
    (?,?,?,?)
");

$trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $_GET["id"]);

$trace -> execute();

// view

echo "<script> window.location='../c/{$module}.php?m=index&n=deleted'</script>";
