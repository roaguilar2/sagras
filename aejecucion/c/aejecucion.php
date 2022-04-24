<?php

session_start();

// module

$module = "aejecucion";
$moduleId =142;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/aejecucion.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

                switch ($mode) {
                    case 'index':
                        $aejecucion -> jIndex($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $aejecucion -> jCreate($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create2':
                        $aejecucion -> jCreate2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create3':
                        $aejecucion -> jCreate3($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $aejecucion -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'update':
                        $aejecucion -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $aejecucion -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $aejecucion -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $aejecucion -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $aejecucion -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $aejecucion -> jDeleteDb($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }