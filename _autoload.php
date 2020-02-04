<?php


define('BASEPATH', __DIR__ .'/');

spl_autoload_register(function ($class) {
    // Paths to autoload
    $paths = [
        "Classes",
    ];

    // Iterates through all paths and requires all classes of this directory
    for ($i = 0; $i < count($paths); $i++) {
        // Contains the full path to the file
        $filePath = BASEPATH . $paths[$i] . '/' . str_replace('\\', '/', $class) . '.php';
        // Require class file if it exists
        if (file_exists($filePath)) {
            require_once $filePath;
        }
    }

});
;