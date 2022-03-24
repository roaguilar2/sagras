<?php

session_start();

// module

$module = "Ticket";
$moduleId = 74;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/ticket.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();



        switch ($mode) {

            case 'index':
                $ticket -> jIndex($moduleId);
                $main -> jFooter();
            break;

            case 'create':
                $ticket -> jCreate($moduleId);
                $main -> jFooter();
            break;

            case 'createDb':
                $ticket -> jCreateDb($moduleId);
                $main -> jFooter();
            break;
            case 'createDbR':
                $ticket -> jCreateDbR($moduleId);
                $main -> jFooter();
            break;
            case 'read':
                $ticket -> jRead($moduleId);
                $main -> jFooter();
                break;
                
            case 'update':
                $ticket -> jUpdate($moduleId);
                $main -> jFooter();
                break;

            case 'updateDb':
                $ticket -> jUpdateDb($moduleId);
                $main -> jFooter();
                break;
                
                case 'updateDbR':
                $ticket -> jUpdateDbR($moduleId);
                $main -> jFooter();
                break;

            case 'delete':
                $ticket -> jDelete($moduleId);
                $main -> jFooter();
                break;

            case 'deleteDb':
                $ticket -> jDeleteDb($moduleId);
                $main -> jFooter();
                break;

            default:
                $main -> jError();
                $main -> jFooter();

        }
   

     


