<?php

session_start();

// module

$module = "aestrategia";
$moduleId =143;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/aestrategia.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

                switch ($mode) {
                    case 'index':
                        $aestrategia -> jIndex($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $aestrategia -> jCreate($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create2':
                        $aestrategia -> jCreate2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create3':
                        $aestrategia -> jCreate3($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $aestrategia -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'update':
                        $aestrategia -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $aestrategia -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $aestrategia -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $aestrategia -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $aestrategia -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $aestrategia -> jDeleteDb($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }