<?php

session_start();

// module

$module = "mtproject";
$moduleId =140;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/mtproject.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

                switch ($mode) {
                    case 'index':
                        $mtproject -> jIndex($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $mtproject -> jCreate($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create2':
                        $mtproject -> jCreate2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create3':
                        $mtproject -> jCreate3($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $mtproject -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'update':
                        $mtproject -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $mtproject -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $mtproject -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $mtproject -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $mtproject -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $mtproject -> jDeleteDb($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }