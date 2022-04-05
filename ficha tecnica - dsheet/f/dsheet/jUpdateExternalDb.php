<?php

// connection

include '../connection.php';

// module

$module = 'dsheet';
$action = 'update';

// var
$dsheetName = filter_var($_POST['dsheetName'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$dsheetSurname = filter_var($_POST['dsheetSurname'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$civilStatusId = $_POST['civilStatusId'];
$dsheetBirthday = filter_var($_POST['dsheetBirthday'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$genderId = $_POST['genderId'];
$dsheetEmail = filter_var($_POST['dsheetEmail'], FILTER_SANITIZE_EMAIL);
$dsheetPhone1 = filter_var($_POST['dsheetPhone1'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$dsheetPhone2 = filter_var($_POST['dsheetPhone2'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$dsheetAddress = filter_var($_POST['dsheetAddress'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$dsheetCity = filter_var($_POST['dsheetCity'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$dsheetState = filter_var($_POST['dsheetState'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$countryId = $_POST['countryId'];
$dsheetAdmission = filter_var($_POST['dsheetAdmission'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$officeId = $_POST['officeId'];
$divisionId = $_POST['divisionId'];
$departmentId = $_POST['departmentId'];
$levelId = $_POST['levelId'];

// update

$update = $master -> prepare ("
    UPDATE dsheet SET
    dsheetName = ?,
    dsheetSurname = ?,
    civilStatusId = ?,
    dsheetBirthday = ?,
    genderId = ?,
    dsheetEmail = ?,
    dsheetPhone1 = ?,
    dsheetPhone2 = ?,
    dsheetAddress = ?,
    dsheetCity = ?,
    dsheetState = ?,
    countryId = ?,
    dsheetAdmission = ?,
    officeId = ?,
    divisionId = ?,
    departmentId = ?,
    levelId = ?
    WHERE
    dsheetId = ?
");

$update -> bind_param (
    "ssisissssssisiiiii",
    $dsheetName, $dsheetSurname, $civilStatusId, $dsheetBirthday, $genderId,
    $dsheetEmail, $dsheetPhone1, $dsheetPhone2, $dsheetAddress, $dsheetCity,
    $dsheetState, $countryId, $dsheetAdmission, $officeId, $divisionId,
    $departmentId, $levelId, $_GET["id"]
);

$update -> execute();

// trace

$trace = $master -> prepare ("
    INSERT INTO trace
    (dsheetId, module, action, itemId)
    VALUES
    (?,?,?,?)
");

$trace -> bind_param ("issi", $_SESSION["dsheetId"], $module, $action, $_GET["id"]);

$trace -> execute();

// view

echo "<script> window.location='../c/{$module}.php?m=external&n=updated'</script>";
