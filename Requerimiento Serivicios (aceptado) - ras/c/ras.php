<?php

session_start();

// module

$module = "ras";
$moduleId = 119;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/ras.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

                switch ($mode) {
                    case 'index':
                        $ras -> jIndex($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $ras -> jCreate($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create2':
                        $ras -> jCreate2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create3':
                        $ras -> jCreate3($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $ras -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'update':
                        $ras -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $ras -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $ras -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $ras -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $ras -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $ras -> jDeleteDb($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }