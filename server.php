<?php

use Neox\PingCompoment;
use Neox\ReverseEchoComponent;

require './vendor/autoload.php';

$loop = \React\EventLoop\Factory::create();

$app = new \Ratchet\App('localhost', 8080, '0.0.0.0', $loop);
$app->route('/reverse', new ReverseEchoComponent);
$app->route('/ping', new PingCompoment($loop));
$app->run();