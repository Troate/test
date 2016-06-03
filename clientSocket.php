<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
error_reporting(E_ALL);

echo "<h2>TCP/IP Connection</h2>\n";

/* Get the port for the WWW service. */
$service_port1 = getservbyname('www', 'tcp');
$service_port = 10000;

/* Get the IP address for the target host. */
$address1 = gethostbyname('www.example.com');
$address = '127.0.0.1';

/* Create a TCP/IP socket. */
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
if ($socket === false) {
    echo "socket_create() failed: reason: " . socket_strerror(socket_last_error()) . "\n";
} else {
    echo "OK.\n";
}

echo "Attempting to connect to '$address' on port '$service_port'...";
$result = socket_connect($socket, $address, $service_port);
if ($result === false) {
    echo "socket_connect() failed.\nReason: ($result) " . socket_strerror(socket_last_error($socket)) . "\n";
} else {
    echo "OK.\n";
}

$in = "hi";



echo "Reading response:\n\n";
$out = socket_read($socket, 2048);
    echo $out;

echo "Sending '$in' to Server\n";
socket_write($socket, $in, strlen($in));
echo "OK.\n";
echo "Reading response:\n\n";
$out1 = socket_read($socket, 2048);
    echo $out1;
$in1="shutdown";
echo "Sending '$in1' to Server\n";
socket_write($socket, $in1, strlen($in1));
echo "OK.\n";
echo "Closing socket...";
socket_close($socket);
echo "OK.\n\n";
?>

