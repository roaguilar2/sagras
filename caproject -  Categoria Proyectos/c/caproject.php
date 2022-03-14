<?php

session_start();

// module

$module = "caproject";
$moduleId = 113;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/caproject.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

                switch ($mode) {
                    case 'index':
                        $caproject -> jIndex($moduleId);
                        $main -> jFooter();
                    break;
                    case 'list':
                        $caproject -> jList($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $caproject -> jCreate($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create2':
                        $caproject -> jCreate2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create3':
                        $caproject -> jCreate3($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $caproject -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'update':
                        $caproject -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $caproject -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $caproject -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $caproject -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $caproject -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $caproject -> jDeleteDb($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }