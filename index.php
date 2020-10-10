<?php

// The Composer auto-loader (official way to load Composer contents) to load external stuff automatically
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/conf/config.php';

use Tracy\Debugger;

//Tracy is able to show Debug bar and Bluescreens for AJAX and redirected requests.
//You just have to start session before Tracy
session_start() || error_log('session_start failed');

if (!isset($debugIpArray)) {
    $debugIpArray = [];
}
$developmentEnvironment = (
    in_array(
        $_SERVER['REMOTE_ADDR'],
        array('::1', '127.0.0.1')
    ) || in_array($_SERVER['REMOTE_ADDR'], $debugIpArray)
    );

Debugger::enable($developmentEnvironment ? Debugger::DEVELOPMENT : Debugger::PRODUCTION, __DIR__ . '/log');

echo "Hello world!";
if ($developmentEnvironment) {
    echo "<br>I am PHP " . PHP_VERSION;
}
echo "<br>Lorem ipsum";
Debugger::log(date('c') . " " . $_SERVER['REMOTE_ADDR'] . PHP_EOL);
