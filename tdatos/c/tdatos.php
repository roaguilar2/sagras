<?php

session_start();

// module

$module = "tdatos";
$moduleId =134;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/tdatos.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

                switch ($mode) {
                    case 'index':
                        $tdatos -> jIndex($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $tdatos -> jCreate($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create2':
                        $tdatos -> jCreate2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create3':
                        $tdatos -> jCreate3($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $tdatos -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'update':
                        $tdatos -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $tdatos -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $tdatos -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $tdatos -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $tdatos -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $tdatos -> jDeleteDb($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }