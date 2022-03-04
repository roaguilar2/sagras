<?php

class Handbook {

    public static function jIndex($moduleId) {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/handbook/jIndex.php';
    }

    public static function jCreate($moduleId) {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/handbook/jCreate.php';
    }

    public static function jCreateDb($moduleId) {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/handbook/jCreateDb.php';
    }

    public static function jUpdate($moduleId) {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/handbook/jUpdate.php';
    }

    public static function jUpdateDb($moduleId) {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/handbook/jUpdateDb.php';
    }

    public static function jDelete($moduleId) {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/handbook/jDelete.php';
    }

    public static function jDeleteDb($moduleId) {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/handbook/jDeleteDb.php';
    }

}

$handbook = new Handbook();