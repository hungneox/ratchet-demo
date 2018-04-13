<?php

namespace Neox;

use Ratchet\ConnectionInterface;
use Ratchet\MessageComponentInterface;

class ReverseEchoComponent implements MessageComponentInterface
{
    public function onOpen(ConnectionInterface $conn)
    {
        echo "new connection from " . $conn->remoteAddress . "\n";
    }

    public function onClose(ConnectionInterface $conn)
    {
        echo "connection closed by " . $conn->remoteAddress . "\n";
    }

    public function onMessage(ConnectionInterface $sender, $msg)
    {
        echo "received message '$msg' from {$sender->remoteAddress}\n";
        $response = strrev($msg);
        $sender->send($response);
    }

    public function onError(ConnectionInterface $conn, \Exception $e)
    {
    }
}