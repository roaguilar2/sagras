<?php

session_start();

// module

$module = "clcodigo";
$moduleId = 123;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/clcodigo.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

                switch ($mode) {
                    case 'index':
                        $clcodigo -> jIndex($moduleId);
                        $main -> jFooter();
                    break;
                    case 'list':
                        $clcodigo -> jList($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $clcodigo -> jCreate($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create2':
                        $clcodigo -> jCreate2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create3':
                        $clcodigo -> jCreate3($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $clcodigo -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;

                    case 'update':
                        $clcodigo -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $clcodigo -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb':
                        $clcodigo -> jUpdateDb($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $clcodigo -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $clcodigo -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $clcodigo -> jDeleteDb($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }