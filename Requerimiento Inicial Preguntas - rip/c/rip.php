<?php

session_start();

// module

$module = "rip";
$moduleId = 80;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/rip.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

                switch ($mode) {
                    case 'index':
                        $rip -> jIndex($moduleId);
                        $main -> jFooter();
                    break;
                    case 'list':
                        $rip -> jList($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $rip -> jCreate($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create2':
                        $rip -> jCreate2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create3':
                        $rip -> jCreate3($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $rip -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'update':
                        $rip -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $rip -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $rip -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $rip -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $rip -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $rip -> jDeleteDb($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }