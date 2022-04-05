<?php

// connection

include '../connection.php';

// select

$_civilStatus = mysqli_query($master, "
    SELECT * FROM civilstatus
    WHERE civilStatusStatus = 1
    ORDER BY civilStatusName
");

// select

$_gender = mysqli_query($master, "
    SELECT * FROM gender
    WHERE genderStatus = 1
    ORDER BY genderName
");

// select

$_country = mysqli_query($master, "
    SELECT * FROM country
    WHERE countryStatus = 1
    ORDER BY countryName
");

// select

$_office = mysqli_query($master, "
    SELECT * FROM office
    WHERE officeStatus = 1
    ORDER BY officeName
");

// select

$_division = mysqli_query($master, "
    SELECT * FROM division
    WHERE divisionStatus = 1
    ORDER BY divisionName
");

// select

$_department = mysqli_query($master, "
    SELECT * FROM department
    WHERE departmentStatus = 1
    ORDER BY departmentName
");

// select

$_level = mysqli_query($master, "
    SELECT * FROM level
    WHERE levelStatus = 1
    ORDER BY levelName

");

// view

require_once '../v/dsheet/jCreate.php';
