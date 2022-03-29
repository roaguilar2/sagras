<?php

session_start();

// module

$module = "rap";
$moduleId = 122;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/rap.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

                switch ($mode) {
                    case 'index':
                        $rap -> jIndex($moduleId);
                        $main -> jFooter();
                    break;
                    case 'list':
                        $rap -> jList($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $rap -> jCreate($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create2':
                        $rap -> jCreate2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create3':
                        $rap -> jCreate3($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $rap -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'update':
                        $rap -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $rap -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $rap -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $rap -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $rap -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $rap -> jDeleteDb($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }