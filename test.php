<?php
require_once __DIR__ . '/vendor/autoload.php';

try {
    $instance = \ExponentPhpSDK\Expo::normalSetup();
    echo 'Olá App funcionando';
} catch (Exception $e) {
    echo 'Test Failed';
}
