<?php

error_reporting(E_ALL);

require(__DIR__ . '/lib/SplClassLoader.php');

$classLoader = new SplClassLoader('WebSocket', __DIR__ . '/lib');
$classLoader->register();

//$server = new \WebSocket\Server('localhost', 8000);
$server = new \WebSocket\Server('localhost', 8080);
$server->registerApplication('echo', \WebSocket\Application\EchoApplication::getInstance());
$server->registerApplication('time', \WebSocket\Application\TimeApplication::getInstance());
$server->run();
