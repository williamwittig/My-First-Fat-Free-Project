<?php
    // Turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    // Require the autoload file
    require_once('vendor/autoload.php');

    // Create instance of the base class
    $f3 = Base::instance();

    // Define a default route
    $f3->route('Get /', function() {
        echo '<h1>Hello, world!</h1>';
    });

    // Run fat free
    $f3->run();