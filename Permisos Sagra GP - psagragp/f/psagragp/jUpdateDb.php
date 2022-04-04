<?php

// connection

include '../connection.php';

// module

$module = 'psagragp';

// update

if ($_GET["uid"] > 2) {

    // update

    if (isset($_POST['moduleId'])){

        foreach ($_POST['moduleId'] as $key => $value) {

            $moduleId = $value;
            $jPsagragp = ($_POST['jPsagragp'][$value]) == true ? 1 : 0;
            $jRead = ($_POST['jRead'][$value]) == true ? 1 : 0;
            $jCreate = ($_POST['jCreate'][$value]) == true ? 1 : 0;
            $jUpdate = ($_POST['jUpdate'][$value]) == true ? 1 : 0;
            $jDelete = ($_POST['jDelete'][$value]) == true ? 1 : 0;

            $update = $master -> prepare ("
                UPDATE psagragp SET
                jPsagragp = ?,
                jRead = ?,
                jCreate = ?,
                jUpdate = ?,
                jDelete = ?
                WHERE
                moduleId = ?
                AND userId = '" . $_GET["uid"] . "'
            ");	

            $update -> bind_param (
                "iiiiii",
                $jPsagragp, $jRead, $jCreate, $jUpdate, $jDelete, $moduleId
            );

            $update -> execute();

        }
    }

    // view

    echo "<script>window.location='../c/{$module}.php?m=index&n=updated'</script>";

}
else {
    
    // view

    echo "<script>window.location='../c/{$module}.php?m=index&n=notAllowed'</script>";
    
}
