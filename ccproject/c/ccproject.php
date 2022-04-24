<?php

session_start();

// module

$module = "ccproject";
$moduleId =119;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/ccproject.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

                switch ($mode) {
                    case 'index':
                        $ccproject -> jIndex($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $ccproject -> jCreate($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create2':
                        $ccproject -> jCreate2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create3':
                        $ccproject -> jCreate3($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $ccproject -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'update':
                        $ccproject -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $ccproject -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $ccproject -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $ccproject -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $ccproject -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $ccproject -> jDeleteDb($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }