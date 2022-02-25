<?php

session_start();

// module

$module = "desk";
$moduleId = 82;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/desk.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

                switch ($mode) {
                    case 'index':
                        $desk -> aIndex($moduleId);
                        $main -> jFooter();
                    break;
                    case 'list':
                        $desk -> aList($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $desk -> aCreate($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create2':
                        $desk -> aCreate2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create3':
                        $desk -> aCreate3($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $desk -> aCreateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'update':
                        $desk -> aUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $desk -> aUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $desk -> aUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $desk -> aUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $desk -> aDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $desk -> aDeleteDb($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }