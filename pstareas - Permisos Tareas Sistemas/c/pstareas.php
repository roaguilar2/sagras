<?php

session_start();

// module

$module = "pstareas";
$moduleId = 119;

// connection

include '../connection.php';
include '../connection2.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/pstareas.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

        switch ($mode) {

            case 'index':
                $pstareas -> jIndex($moduleId);
                $main -> jFooter();
            break;

            case 'create':
                $pstareas -> jCreate($moduleId);
                $main -> jFooter();
            break;

            case 'createDb':
                $pstareas -> jCreateDb($moduleId);
                $main -> jFooter();
            break;

            case 'update':
                $pstareas -> jUpdate($moduleId);
                $main -> jFooter();
                break;

            case 'updateDb':
                $pstareas -> jUpdateDb($moduleId);
                $main -> jFooter();
                break;

            case 'delete':
                $pstareas -> jDelete($moduleId);
                $main -> jFooter();
                break;

            case 'deleteDb':
                $pstareas -> jDeleteDb($moduleId);
                $main -> jFooter();
                break;

            default:
                $main -> jError();
                $main -> jFooter();

        }
    

