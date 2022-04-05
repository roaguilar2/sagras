<?php

session_start();

// module

$module = "dsheet";
$moduleId = 126;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/dsheet.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

switch ($_SESSION["subscriberId"]) {
    
    case 1:

        switch ($mode) {

            case 'index':
                if ($_SESSION["dsheetAdmin"] == 4){
                    $allow = 1;
                    echo $view = $allow == 1 ?
                    "{$dsheet -> jIndex()}" : "{$main -> jNotAllowed("main")}";
                    $main -> jFooter();
                }
                else {
                    echo $view = $allow -> jAccess == 1 ?
                    "{$dsheet -> jIndex()}" : "{$main -> jNotAllowed("main")}";
                    $main -> jFooter();
                }
            break;

            case 'external':
                if ($_SESSION["dsheetAdmin"] == 4){
                    $allow = 1;
                    echo $view = $allow == 1 ?
                    "{$dsheet -> jExternal()}" : "{$main -> jNotAllowed("main")}";
                    $main -> jFooter();
                }
                else {
                    echo $view = $allow -> jAccess == 1 ?
                    "{$dsheet -> jExternal()}" : "{$main -> jNotAllowed("main")}";
                    $main -> jFooter();
                }
            break;

            case 'read':
                if ($_SESSION["dsheetAdmin"] == 4){
                    $allow = 1;
                    echo $view = $allow == 1 ?
                    "{$dsheet -> jRead()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                else {
                    echo $view = $allow -> jRead == 1 ?
                    "{$dsheet -> jRead()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
            break;

            case 'create':
                if ($_SESSION["dsheetAdmin"] == 4){
                    $allow = 1;
                    echo $view = $allow == 1 ?
                    "{$dsheet -> jCreate()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                else {
                    echo $view = $allow -> jCreate == 1 ?
                    "{$dsheet -> jCreate()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
            break;

            case 'createDb':
                echo $view = $allow -> jCreate == 1 ?
                "{$dsheet -> jCreateDb()}" : "{$main -> jNotAllowed($module)}";
                $main -> jFooter();
            break;

            case 'createExternal':
                if ($_SESSION["dsheetAdmin"] == 4){
                    $allow = 1;
                    echo $view = $allow == 1 ?
                    "{$dsheet -> jCreateExternal()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                else {
                    echo $view = $allow -> jCreate == 1 && $_SESSION["dsheetPrimary"] == 1 ?
                    "{$dsheet -> jCreateExternal()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
            break;

            case 'createExternalDb':
                echo $view = $allow -> jCreate == 1 && $_SESSION["dsheetPrimary"] == 1 ?
                "{$dsheet -> jCreateExternalDb()}" : "{$main -> jNotAllowed($module)}";
                $main -> jFooter();
            break;

            case 'update':
                if ($_SESSION["dsheetAdmin"] == 4){
                    $allow = 1;
                    echo $view = $allow == 1 ?
                    "{$dsheet -> jUpdate()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                else {
                    echo $view = $allow -> jUpdate == 1 ?
                    "{$dsheet -> jUpdate()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                break;

            case 'updateDb':
                echo $view = $allow -> jUpdate == 1 ?
                "{$dsheet -> jUpdateDb()}" : "{$main -> jNotAllowed($module)}";
                $main -> jFooter();
                break;

            case 'updateExternal':
                if ($_SESSION["dsheetAdmin"] == 4){
                    $allow = 1;
                    echo $view = $allow == 1 ?
                    "{$dsheet -> jUpdateExternal()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                else {
                    echo $view = $allow -> jUpdate == 1 && $_SESSION["dsheetPrimary"] == 1 ?
                    "{$dsheet -> jUpdateExternal()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                break;

            case 'updateExternalDb':
                echo $view = $allow -> jUpdate == 1 && $_SESSION["dsheetPrimary"] == 1 ?
                "{$dsheet -> jUpdateExternalDb()}" : "{$main -> jNotAllowed($module)}";
                $main -> jFooter();
                break;

            case 'delete':
                if ($_SESSION["dsheetAdmin"] == 4){
                    $allow = 1;
                    echo $view = $allow == 1 ?
                    "{$dsheet -> jDelete()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                else {
                    echo $view = $allow -> jDelete == 1 ?
                    "{$dsheet -> jDelete()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                break;

            case 'deleteDb':
                echo $view = $allow -> jDelete == 1 ?
                "{$dsheet -> jDeleteDb()}" : "{$main -> jNotAllowed($module)}";
                $main -> jFooter();
                break;

            case 'deleteExternal':
                if ($_SESSION["dsheetAdmin"] == 4){
                    $allow = 1;
                    echo $view = $allow == 1 ?
                    "{$dsheet -> jDeleteExternal()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                else {
                    echo $view = $allow -> jDelete == 1 && $_SESSION["dsheetPrimary"] == 1 ?
                    "{$dsheet -> jDeleteExternal()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                break;

            case 'deleteExternalDb':
                echo $view = $allow -> jDelete == 1 && $_SESSION["dsheetPrimary"] == 1 ?
                "{$dsheet -> jDeleteExternalDb()}" : "{$main -> jNotAllowed($module)}";
                $main -> jFooter();
                break;

            case 'profile':
                if ($_SESSION["dsheetAdmin"] == 4){
                    $allow = 1;
                    echo $view = $allow == 1 ?
                    "{$dsheet -> jProfile()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                else {
                    echo $view = $allow -> jUpdate == 1 ?
                    "{$dsheet -> jProfile()}" : "{$main -> jNotAllowed($module)}";
                    $main -> jFooter();
                }
                break;

            case 'profileDb':
                echo $view = $allow -> jUpdate == 1 ?
                "{$dsheet -> jProfileDb()}" : "{$main -> jNotAllowed($module)}";
                $main -> jFooter();
                break;

            default:
                $main -> jError();
                $main -> jFooter();

        }
        break;

    default:
        $main -> jError();
        $main -> jFooter();

}
