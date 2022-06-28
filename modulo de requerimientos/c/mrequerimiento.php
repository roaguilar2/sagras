<?php

session_start();

// module

$module = "mrequerimiento";
$moduleId =122;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/mrequerimiento.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

                switch ($mode) {
                    case 'index':
                        $mrequerimiento -> jIndex($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $mrequerimiento -> jCreate($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create2':
                        $mrequerimiento -> jCreate2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create3':
                        $mrequerimiento -> jCreate3($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $mrequerimiento -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'update':
                        $mrequerimiento -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $mrequerimiento -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $mrequerimiento -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $mrequerimiento -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $mrequerimiento -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $mrequerimiento -> jDeleteDb($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'read':
                        $mrequerimiento -> jRead($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }