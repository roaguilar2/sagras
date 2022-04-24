<?php

session_start();

// module

$module = "lcodigo";
$moduleId =121;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/lcodigo.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

                switch ($mode) {
                    case 'index':
                        $lcodigo -> jIndex($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $lcodigo -> jCreate($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create2':
                        $lcodigo -> jCreate2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create3':
                        $lcodigo -> jCreate3($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $lcodigo -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'update':
                        $lcodigo -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $lcodigo -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $lcodigo -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $lcodigo -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $lcodigo -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $lcodigo -> jDeleteDb($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }