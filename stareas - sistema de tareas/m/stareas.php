<?php

class Stareas {

    public static function jIndex($moduleId) {
        require_once '../f/stareas/jIndex.php';
    }

    public static function jCreate($moduleId) {
        require_once '../f/stareas/jCreate.php';
    }

    public static function jCreateDb($moduleId) {
        require_once '../f/stareas/jCreateDb.php';
    }
    public static function jCreateDbR($moduleId) {
        require_once '../f/stareas/jCreateDbR.php';
    }

    public static function jRead($moduleId) {
        require_once '../f/stareas/jRead.php';
    }
    
    public static function jUpdate($moduleId) {
        require_once '../f/stareas/jUpdate.php';
    }

    public static function jUpdateDb($moduleId) {
        require_once '../f/stareas/jUpdateDb.php';
    }

    public static function jUpdateDbR($moduleId) {
        require_once '../f/stareas/jUpdateDbR.php';
    }

    public static function jDelete($moduleId) {
        require_once '../f/stareas/jDelete.php';
    }

    public static function jDeleteDb($moduleId) {
        require_once '../f/stareas/jDeleteDb.php';
    }

}

$stareas = new Stareas();
