<?php

session_start();

// module

$module = "pproject";
$moduleId = 115;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/pproject.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

                switch ($mode) {
                    case 'index':
                        $pproject -> jIndex($moduleId);
                        $main -> jFooter();
                    break;
                    case 'list':
                        $pproject -> jList($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $pproject -> jCreate($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create2':
                        $pproject -> jCreate2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create3':
                        $pproject -> jCreate3($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $pproject -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'update':
                        $pproject -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $pproject -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $pproject -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $pproject -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $pproject -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $pproject -> jDeleteDb($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }