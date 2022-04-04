<?php

// connection

include '../connection.php';

// select

$_user = mysqli_query($master, "
    SELECT * FROM user
    WHERE userId = '" . $_GET["uid"] . "'
");

$user = $_user -> fetch_object();

// select

$_module = mysqli_query($master, "
    SELECT * FROM module
    INNER JOIN psagragp
    ON module.moduleId = psagragp.moduleId
    AND psagragp.userId = '" . $_GET["uid"] . "'
    WHERE module.moduleStatus = 1
    AND module.moduleId <> 1
    ORDER BY jPsagragp DESC, module.moduleName ASC
");

// view

require_once '../v/psagragp/jUpdate.php';