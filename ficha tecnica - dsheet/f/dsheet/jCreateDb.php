<?php

// connection

include '../connection.php';

// module

$module = 'dsheet';
$action = 'add';

// var
$subscriberId = 1;
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
$dsheetPassword = password_hash("12345", PASSWORD_DEFAULT);
$dsheetTypeId = 1;
$dsheetAdmin = $_POST['dsheetAdmin'];

// select

$_dsheet = mysqli_query($master, "
    SELECT * FROM dsheet
    WHERE dsheetEmail = '" . $dsheetEmail . "'
    AND dsheetStatus = 1
");

$dsheet = $_dsheet -> fetch_object();

$dsheetDb = $dsheet -> dsheetEmail ;

// insert

if (strcasecmp($dsheetEmail, $dsheetDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO dsheet
        (subscriberId, dsheetName, dsheetSurname, civilStatusId, dsheetBirthday,
        genderId, dsheetEmail, dsheetPhone1, dsheetPhone2, dsheetAddress,
        dsheetCity, dsheetState, countryId, dsheetAdmission, officeId,
        divisionId, departmentId, levelId, dsheetPassword, dsheetTypeId,
        dsheetAdmin)
        VALUES
        (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "issisissssssisiiiisii",
        $subscriberId, $dsheetName, $dsheetSurname, $civilStatusId, $dsheetBirthday,
        $genderId, $dsheetEmail, $dsheetPhone1, $dsheetPhone2, $dsheetAddress,
        $dsheetCity, $dsheetState, $countryId, $dsheetAdmission, $officeId,
        $divisionId, $departmentId, $levelId, $dsheetPassword, $dsheetTypeId,
        $dsheetAdmin
    );

    $insert -> execute();

    $id = $master -> insert_id;
    
    // trace

    $trace = $master -> prepare ("
    	INSERT INTO trace
    	(dsheetId, module, action, itemId)
    	VALUES
    	(?,?,?,?)
    ");

    $trace -> bind_param ("issi", $_SESSION["dsheetId"], $module, $action, $id);

    $trace -> execute();

    // view

    echo "<script> window.location='../c/{$module}.php?m=index&n=added'</script>";
}
else {

    // view

    echo "<script> window.location='../c/{$module}.php?m=index&n=duplicated'</script>";

}
