<?php

session_start();

// module

$module = "manual";
$moduleId =122;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/manual.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

                switch ($mode) {
                    case 'index':
                        $manual -> jIndex($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $manual -> jCreate($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create2':
                        $manual -> jCreate2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create3':
                        $manual -> jCreate3($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $manual -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'update':
                        $manual -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $manual -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $manual -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $manual -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $manual -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $manual -> jDeleteDb($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'read':
                        $manual -> jRead($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }