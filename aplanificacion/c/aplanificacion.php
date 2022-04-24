<?php

session_start();

// module

$module = "aplanificacion";
$moduleId =143;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/aplanificacion.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

                switch ($mode) {
                    case 'index':
                        $aplanificacion -> jIndex($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $aplanificacion -> jCreate($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create2':
                        $aplanificacion -> jCreate2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create3':
                        $aplanificacion -> jCreate3($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $aplanificacion -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'update':
                        $aplanificacion -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $aplanificacion -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $aplanificacion -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $aplanificacion -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $aplanificacion -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $aplanificacion -> jDeleteDb($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }