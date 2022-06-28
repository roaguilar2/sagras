<?php

// connection

include '../connection.php';


// access

include '../allow.php';

// select

$country = mysqli_query($master, "
    SELECT * FROM country
    WHERE countryStatus = 1
    ORDER BY countryName
");

// select

$riskPartner = mysqli_query($master, "
    SELECT * FROM user
    WHERE subscriberId = '" . $_SESSION["subscriberId"] . "'
    AND subscriberId > 1
");

// select

$economicArea = mysqli_query($master, "
    SELECT * FROM economicarea
    WHERE economicAreaStatus = 1
    ORDER BY economicAreaName
");

// view

require_once '../v/mrequerimiento/jCreate3.php';
