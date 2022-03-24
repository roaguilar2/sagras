<?php

session_start();

// module

$module = "permiso";
$moduleId = 77;

// connection

include '../connection.php';
include '../connection2.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/permiso.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

        switch ($mode) {

            case 'index':
                $permiso -> jIndex($moduleId);
                $main -> jFooter();
            break;

            case 'create':
                $permiso -> jCreate($moduleId);
                $main -> jFooter();
            break;

            case 'createDb':
                $permiso -> jCreateDb($moduleId);
                $main -> jFooter();
            break;

            case 'update':
                $permiso -> jUpdate($moduleId);
                $main -> jFooter();
                break;

            case 'updateDb':
                $permiso -> jUpdateDb($moduleId);
                $main -> jFooter();
                break;

            case 'delete':
                $permiso -> jDelete($moduleId);
                $main -> jFooter();
                break;

            case 'deleteDb':
                $permiso -> jDeleteDb($moduleId);
                $main -> jFooter();
                break;

            default:
                $main -> jError();
                $main -> jFooter();

        }
    

