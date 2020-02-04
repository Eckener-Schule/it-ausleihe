<?php


define('BASEPATH', __DIR__ . DIRECTORY_SEPARATOR);

spl_autoload_register(function ($class) {
    // Paths to autoload
    $paths = [
        "Classes",
    ];

    // Iterates through all paths and requires all classes of this directory
    for ($i = 0; $i < count($paths); $i++) {
        // Contains the full path to the file
        $filePath = BASEPATH . $paths[$i] . DIRECTORY_SEPARATOR . str_replace('\\', '/', $class) . '.php';
        // Require class file if it exists
        if (file_exists($filePath)) {
            require_once $filePath;
        }
    }

});

spl_autoload_register(function ($class) {

    // project-specific namespace prefix
    $prefix = 'ESFL\\ITAusleihe\\';

    // base directory for the namespace prefix
    $base_dir = __DIR__ . '/src/';

    // does the class use the namespace prefix?
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        // no, move to the next registered autoloader
        return;
    }

    // get the relative class name
    $relative_class = substr($class, $len);

    // replace the namespace prefix with the base directory, replace namespace
    // separators with directory separators in the relative class name, append
    // with .php
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    // if the file exists, require it
    if (file_exists($file)) {
        require $file;
    }
});