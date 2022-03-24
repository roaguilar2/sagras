<?php

class Ticket {

    public static function jIndex($moduleId) {
        require_once '../f/ticket/jIndex.php';
    }

    public static function jCreate($moduleId) {
        require_once '../f/ticket/jCreate.php';
    }

    public static function jCreateDb($moduleId) {
        require_once '../f/ticket/jCreateDb.php';
    }
    public static function jCreateDbR($moduleId) {
        require_once '../f/ticket/jCreateDbR.php';
    }

    public static function jRead($moduleId) {
        require_once '../f/ticket/jRead.php';
    }
    
    public static function jUpdate($moduleId) {
        require_once '../f/ticket/jUpdate.php';
    }

    public static function jUpdateDb($moduleId) {
        require_once '../f/ticket/jUpdateDb.php';
    }

    public static function jUpdateDbR($moduleId) {
        require_once '../f/ticket/jUpdateDbR.php';
    }

    public static function jDelete($moduleId) {
        require_once '../f/ticket/jDelete.php';
    }

    public static function jDeleteDb($moduleId) {
        require_once '../f/ticket/jDeleteDb.php';
    }

}

$ticket = new Ticket();
