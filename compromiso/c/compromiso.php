<?php

session_start();

// module

$module = "compromiso";
$moduleId =141;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/compromiso.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

                switch ($mode) {
                    case 'index':
                        $compromiso -> jIndex($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $compromiso -> jCreate($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create2':
                        $compromiso -> jCreate2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create3':
                        $compromiso -> jCreate3($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $compromiso -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'update':
                        $compromiso -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $compromiso -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $compromiso -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $compromiso -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $compromiso -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $compromiso -> jDeleteDb($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }