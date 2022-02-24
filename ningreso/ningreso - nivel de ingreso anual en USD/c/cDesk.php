<?php

session_start();

// module

$module = "ningreso";
$moduleId = 99;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/ningreso.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

switch ($_SESSION["userTypeId"]) {
    
    case 1:
        
        switch ($_SESSION["userAdmin"]) {
        
            case 4:

                switch ($mode) {

                    case 'index':
                        $ningreso -> jIndex($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();

                }
                break;
            
            case 1:
            case 2:
            case 3:
            case 5:
        
                switch ($mode) {

                    case 'index':
                        echo $view = $allow -> jAccess == 1 ?
                        "{$ningreso -> jIndex($moduleId)}" : "{$main -> jNotAllowed("main")}";
                        $main -> jFooter();
                    break;

                    case 'create':
                        echo $view = $allow -> jCreate == 1 ?
                        "{$ningreso -> jCreate($moduleId)}" : "{$main -> jNotAllowed($module)}";
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        echo $view = $allow -> jCreate == 1 ?
                        "{$ningreso -> jCreateDb($moduleId)}" : "{$main -> jNotAllowed($module)}";
                        $main -> jFooter();
                    break;

                    case 'update':
                        echo $view = $allow -> jUpdate == 1 ?
                        "{$ningreso -> jUpdate($moduleId)}" : "{$main -> jNotAllowed($module)}";
                        $main -> jFooter();
                        break;

                    case 'updateDb':
                        echo $view = $allow -> jUpdate == 1 ?
                        "{$ningreso -> jUpdateDb($moduleId)}" : "{$main -> jNotAllowed($module)}";
                        $main -> jFooter();
                        break;

                    case 'delete':
                        echo $view = $allow -> jDelete == 1 ?
                        "{$ningreso -> jDelete($moduleId)}" : "{$main -> jNotAllowed($module)}";
                        $main -> jFooter();
                        break;

                    case 'deleteDb':
                        echo $view = $allow -> jDelete == 1 ?
                        "{$ningreso -> jDeleteDb($moduleId)}" : "{$main -> jNotAllowed($module)}";
                        $main -> jFooter();
                        break;

                    default:
                        $main -> jError();
                        $main -> jFooter();

                }
                break;
        }
        break;

    default:
        $main -> jError();
        $main -> jFooter();

}
