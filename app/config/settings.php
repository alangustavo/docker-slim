<?php


$enviroment = $_ENV["ENVIROMENT"];

if ($enviroment === "dev") {
    // Should be set to 0 in production
    error_reporting(E_ALL);

    // Should be set to '0' in production
    ini_set('display_errors', '1');
} else {
    // Should be set to 0 in production
    error_reporting(0);

    // Should be set to '0' in production
    ini_set('display_errors', '0');
}
// Should be set to 0 in production
error_reporting(E_ALL);

// Should be set to '0' in production
ini_set('display_errors', '1');

// Settings
$settings = [];

// ...

return $settings;
