<?php

session_start();

// module

$module = "rac";
$moduleId = 121;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/rac.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

                switch ($mode) {
                    case 'index':
                        $rac
                     -> jIndex($moduleId);
                        $main -> jFooter();
                    break;
                    case 'list':
                        $rac
                     -> jList($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $rac
                     -> jCreate($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create2':
                        $rac
                     -> jCreate2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create3':
                        $rac
                     -> jCreate3($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $rac
                     -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'update':
                        $rac
                     -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $rac
                     -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $rac
                     -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $rac
                     -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $rac
                     -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $rac
                     -> jDeleteDb($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }