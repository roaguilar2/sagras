<?php

// connection

include '../connection.php';

// module

$module = 'pstareas';
$action = 'update';  

// var
$userId = $_POST['userId'];
$designatedId = $_POST['designatedId'];
$g = $_POST['grupoId'];
$c = $_GET["id"];
$s =  $_SESSION["subscriberId"];
$name = mysqli_query($master, "
    SELECT * FROM user
    WHERE userId = '" . $userId . "'
");
$r_name = mysqli_fetch_array($name);

// set fields
$userName = $r_name["userName"];

$insert = $master -> prepare ("
INSERT INTO pstareas
(userName, userId, designatedId, moduleId, subscriberId, grupoId)
VALUES
(?,?,?,?,?,?)
");

$insert -> bind_param (
"siiiii",
$userName, $userId, $designatedId, $c, $s, $g
);

$insert -> execute();

$id = $master -> insert_id;


// view

echo "<script> window.location='../c/{$module}.php?m=update&n=updated&id={$c}'</script>";


