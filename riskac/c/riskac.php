<?php

session_start();

// module

$module = "riskac";
$moduleId =121;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/riskac.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

                switch ($mode) {
                    case 'index':
                        $riskac -> jIndex($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $riskac -> jCreate($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create2':
                        $riskac -> jCreate2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create3':
                        $riskac -> jCreate3($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $riskac -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'update':
                        $riskac -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $riskac -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $riskac -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $riskac -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $riskac -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $riskac -> jDeleteDb($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }