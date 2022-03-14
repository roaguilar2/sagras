<?php

session_start();

// module

$module = "categoriaD";
$moduleId = 113;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/categoriaD.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

                switch ($mode) {
                    case 'index':
                        $categoriaD -> jIndex($moduleId);
                        $main -> jFooter();
                    break;
                    case 'list':
                        $categoriaD -> jList($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $categoriaD -> jCreate($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create2':
                        $categoriaD -> jCreate2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create3':
                        $categoriaD -> jCreate3($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $categoriaD -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'update':
                        $categoriaD -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $categoriaD -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $categoriaD -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $categoriaD -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $categoriaD -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $categoriaD -> jDeleteDb($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }