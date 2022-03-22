<?php

session_start();

// module

$module = "ris";
$moduleId = 78;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/ris.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

                switch ($mode) {
                    case 'index':
                        $ris -> jIndex($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $ris -> jCreate($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create2':
                        $ris -> jCreate2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create3':
                        $ris -> jCreate3($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $ris -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'update':
                        $ris -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $ris -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $ris -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $ris -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $ris -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $ris -> jDeleteDb($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }