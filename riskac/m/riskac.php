<?php

class Riskac {

    public static function jIndex($moduleId) {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/riskac/jIndex.php';
    }

    public static function jCreate($moduleId) {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/riskac/jCreate.php';
    }
    
    public static function jCreate2($moduleId) {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/riskac/jCreate2.php';
    }
        public static function jCreate3($moduleId) {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/riskac/jCreate3.php';
    }

    public static function jCreateDb($moduleId) {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/riskac/jCreateDb.php';
    }

    public static function jUpdate($moduleId) {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/riskac/jUpdate.php';
    }

    public static function jUpdate2($moduleId) {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/riskac/jUpdate2.php';
    }

    public static function jUpdateDb($moduleId) {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/riskac/jUpdateDb.php';
    }
    
    public static function jUpdateDb2($moduleId) {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/riskac/jUpdateDb2.php';
    }

    public static function jDelete($moduleId) {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/riskac/jDelete.php';
    }

    public static function jDeleteDb($moduleId) {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/riskac/jDeleteDb.php';
    }

}

$riskac = new Riskac();