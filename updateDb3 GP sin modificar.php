<?php

// module
$module = 'mproject';

/*
 * Incluye y evalúa el archivo especificado.
 */
include '../connection.php';

// var
$serviceId = $_GET['serviceId'];
$etapaId = $_GET['etapaId'];
$mcategoriaId = $_GET['mcategoriaId'];
$actividadId = $_GET ['actividadId'];
$actividadText = $_GET['actividadText'];
$actividadName = $_GET['actividadName'];
$mmodeloId = $_GET['mmodeloId'];
//post
$modeloId = $_POST["modeloId"];
$npregunta = $_POST["npregunta"];
$ayudaText =$_POST["ayudaText"];
$mText1 = $_POST["texto1"];
$mText2 = $_POST["texto2"];
$mText3 = $_POST["texto3"];
$mText4 = $_POST["texto4"];
$mText5 = $_POST["texto5"];
$mText6 = $_POST["texto6"];
$mText7 = $_POST["texto7"];
$mText8 = $_POST["texto8"];
$mText9 = $_POST["texto9"];
$mText10 = $_POST["texto10"];
$mText11 = $_POST["texto11"];
$mText12 = $_POST["texto12"];
$mText13 = $_POST["texto13"];
$mText14 = $_POST["texto14"];
$mText15 = $_POST["texto15"];
$mText16 = $_POST["texto16"];
$mText17 = $_POST["texto17"];
$mText18 = $_POST["texto18"];
$mText19 = $_POST["texto19"];
$mText20 = $_POST["texto20"];

// update

$update = $master -> prepare ("
    UPDATE mmodelo
    SET
    modeloId = ?,
    npregunta = ?,
    ayudaText = ?,
    texto1 = ?,
    texto2 = ?,
    texto3 = ?,
    texto4 = ?,
    texto5 = ?,
    texto6 = ?,
    texto7 = ?,
    texto8 = ?,
    texto9 = ?,
    texto10 = ?,
    texto11 = ?,
    texto12 = ?,
    texto13 = ?,
    texto14 = ?,
    texto15 = ?,
    texto16 = ?,
    texto17 = ?,
    texto18 = ?,
    texto19 = ?,
    texto20 = ?
    WHERE
    mmodeloId = ?
");	

$update -> bind_param (
    "iisssssssssssssssssssssi",
    $modeloId, $npregunta, $ayudaText, $mText1, $mText2, $mText3, $mText4, $mText5, $mText6, $mText7, $mText8, $mText9, $mText10, $mText11, $mText12, $mText13, $mText14, $mText15, $mText16, $mText17, $mText18, $mText19, $mText20, $mmodeloId
);

$update -> execute();

// trace

$trace = $master -> prepare ("
    INSERT INTO trace
    (userId, module, action, itemId)
    VALUES
    (?,?,?,?)
");

$trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $_GET["cid"]);

$trace -> execute();

         

// view

echo "<script> window.location='../c/{$module}.php?m=index5&n=updated&serviceId={$serviceId}&etapaId={$etapaId}&mcategoriaId={$mcategoriaId}&actividadId={$actividadId}'</script>";

    
    
    