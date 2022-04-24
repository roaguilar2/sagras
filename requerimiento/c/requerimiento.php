<?php

session_start();

// module

$module = "requerimiento";
$moduleId =139;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/requerimiento.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

                switch ($mode) {
                    case 'index':
                        $requerimiento -> jIndex($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $requerimiento -> jCreate($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create2':
                        $requerimiento -> jCreate2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create3':
                        $requerimiento -> jCreate3($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $requerimiento -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'update':
                        $requerimiento -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $requerimiento -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $requerimiento -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $requerimiento -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $requerimiento -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $requerimiento -> jDeleteDb($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }