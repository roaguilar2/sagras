<?php

// connection

include '../connection.php';

// module

$module = 'psagragp';

// insert

if (isset($_POST['moduleId'])){

    foreach ($_POST['moduleId'] as $key => $value) {

        $moduleId = $value;
        $jPsagragp = ($_POST['jPsagragp'][$value]) == true ? 1 : 0;
        $jRead = ($_POST['jRead'][$value]) == true ? 1 : 0;
        $jCreate = ($_POST['jCreate'][$value]) == true ? 1 : 0;
        $jUpdate = ($_POST['jUpdate'][$value]) == true ? 1 : 0;
        $jDelete = ($_POST['jDelete'][$value]) == true ? 1 : 0;

        $insert = $master -> prepare ("
            INSERT INTO psagragp
            (subscriberId, userId, moduleId, jPsagragp, jRead, jCreate, jUpdate, jDelete)
            VALUES
            (?,?,?,?,?,?,?,?)
        ");

        $insert -> bind_param (
            "iiiiiiii",
            $_GET["sid"], $_GET["uid"], $moduleId, $jPsagragp, $jRead, $jCreate, $jUpdate, $jDelete
        );

        $insert -> execute();

    }
}

// view

echo "<script> window.location='../c/{$module}.php?m=index&n=added'</script>";
