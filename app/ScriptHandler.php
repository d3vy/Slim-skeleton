<?php

namespace App;

class ScriptHandler {

    public static function createParametersFile() {
        $configDir = __DIR__ . '/config';

        if(!file_exists("{$configDir}/parameters.yaml")) {
            file_put_contents("{$configDir}/parameters.yaml",
                file_get_contents("{$configDir}/parameters.yaml.dist")
            );

            echo "Parameters file created.\n";
        } else {
            echo "Parameters file already exists.\n";
        }
    }
}