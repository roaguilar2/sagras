<?php

// connection

include '../connection.php';

// module

$module = 'dsheet';

// select

$_access = mysqli_query($master, "
    SELECT * FROM access
    INNER JOIN module
    ON access.moduleId = module.moduleId
    INNER JOIN dsheet
    ON access.dsheetId = dsheet.dsheetId
    WHERE dsheet.dsheetId = '" . $_SESSION["dsheetId"] . "'
    AND module.moduleController = '" . $module . "'
");

$access = $_access -> fetch_object();

$_permission = mysqli_query($master, "
    SELECT * FROM access
    INNER JOIN module
    ON access.moduleId = module.moduleId
    INNER JOIN dsheet
    ON access.dsheetId = dsheet.dsheetId
    WHERE dsheet.dsheetId = '" . $_GET["id"] . "'
");

// select

$_dsheet = mysqli_query($master, "
    SELECT * FROM dsheet
    INNER JOIN civilstatus
    ON dsheet.civilStatusId = civilstatus.civilStatusId
    INNER JOIN gender
    ON dsheet.genderId = gender.genderId
    INNER JOIN country
    ON dsheet.countryId = country.countryId
    INNER JOIN office
    ON dsheet.officeId = office.officeId
    INNER JOIN division
    ON dsheet.divisionId = division.divisionId
    INNER JOIN department
    ON dsheet.departmentId = department.departmentId
    INNER JOIN level
    ON dsheet.levelId = level.levelId
    WHERE dsheet.dsheetId = '" . $_GET["id"] . "'
");

$dsheet = $_dsheet -> fetch_object();

// view

require_once '../v/dsheet/jRead.php';
