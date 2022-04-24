<?php

session_start();

// module

$module = "frecuencia";
$moduleId =117;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/frecuencia.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

                switch ($mode) {
                    case 'index':
                        $frecuencia -> jIndex($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $frecuencia -> jCreate($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create2':
                        $frecuencia -> jCreate2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create3':
                        $frecuencia -> jCreate3($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $frecuencia -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'update':
                        $frecuencia -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $frecuencia -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $frecuencia -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $frecuencia -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $frecuencia -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $frecuencia -> jDeleteDb($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }