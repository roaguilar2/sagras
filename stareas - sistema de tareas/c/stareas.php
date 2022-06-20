<?php

session_start();

// module

$module = "stareas";
$moduleId = 115;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/stareas.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();



        switch ($mode) {

            case 'index':
                $stareas -> jIndex($moduleId);
                $main -> jFooter();
            break;

            case 'create':
                $stareas -> jCreate($moduleId);
                $main -> jFooter();
            break;

            case 'createDb':
                $stareas -> jCreateDb($moduleId);
                $main -> jFooter();
            break;
            case 'createDbR':
                $stareas -> jCreateDbR($moduleId);
                $main -> jFooter();
            break;
            case 'read':
                $stareas -> jRead($moduleId);
                $main -> jFooter();
                break;
                
            case 'update':
                $stareas -> jUpdate($moduleId);
                $main -> jFooter();
                break;

            case 'updateDb':
                $stareas -> jUpdateDb($moduleId);
                $main -> jFooter();
                break;
                
                case 'updateDbR':
                $stareas -> jUpdateDbR($moduleId);
                $main -> jFooter();
                break;

            case 'delete':
                $stareas -> jDelete($moduleId);
                $main -> jFooter();
                break;

            case 'deleteDb':
                $stareas -> jDeleteDb($moduleId);
                $main -> jFooter();
                break;

            default:
                $main -> jError();
                $main -> jFooter();

        }
   

     


