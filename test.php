<?php
/* Allocate a new context */
$context = new ZMQContext();

/* Create a new socket */
$socket = $context->getSocket(ZMQ::SOCKET_REQ, 'my sock');

/* Connect the socket */
$socket->connect("tcp://example.com:1234");

/* Send a request */
$socket->send("Hello there");

/* Receive back the response */
$message = $socket->recv();
echo "Received message: {$message}\n";
?>