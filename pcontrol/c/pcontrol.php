<?php

session_start();

// module

$module = "pcontrol";
$moduleId =138;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/pcontrol.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

                switch ($mode) {
                    case 'index':
                        $pcontrol -> jIndex($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $pcontrol -> jCreate($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create2':
                        $pcontrol -> jCreate2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create3':
                        $pcontrol -> jCreate3($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $pcontrol -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'update':
                        $pcontrol -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $pcontrol -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $pcontrol -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $pcontrol -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $pcontrol -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $pcontrol -> jDeleteDb($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }