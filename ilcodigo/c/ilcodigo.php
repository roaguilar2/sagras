<?php

session_start();

// module

$module = "ilcodigo";
$moduleId =133;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/ilcodigo.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

                switch ($mode) {
                    case 'index':
                        $ilcodigo -> jIndex($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $ilcodigo -> jCreate($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create2':
                        $ilcodigo -> jCreate2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create3':
                        $ilcodigo -> jCreate3($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $ilcodigo -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'update':
                        $ilcodigo -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $ilcodigo -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $ilcodigo -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $ilcodigo -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $ilcodigo -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $ilcodigo -> jDeleteDb($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }