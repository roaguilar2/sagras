<?php

session_start();

// module

$module = "iproject";
$moduleId =120;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/iproject.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

                switch ($mode) {
                    case 'index':
                        $iproject -> jIndex($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $iproject -> jCreate($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create2':
                        $iproject -> jCreate2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create3':
                        $iproject -> jCreate3($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $iproject -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'update':
                        $iproject -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $iproject -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $iproject -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $iproject -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $iproject -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $iproject -> jDeleteDb($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }