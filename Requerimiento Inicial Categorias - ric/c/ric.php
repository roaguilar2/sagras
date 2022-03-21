<?php

session_start();

// module

$module = "ric";
$moduleId = 116;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/ric.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

                switch ($mode) {
                    case 'index':
                        $ric
                     -> jIndex($moduleId);
                        $main -> jFooter();
                    break;
                    case 'list':
                        $ric
                     -> jList($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $ric
                     -> jCreate($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create2':
                        $ric
                     -> jCreate2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create3':
                        $ric
                     -> jCreate3($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $ric
                     -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'update':
                        $ric
                     -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $ric
                     -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $ric
                     -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $ric
                     -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $ric
                     -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $ric
                     -> jDeleteDb($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }