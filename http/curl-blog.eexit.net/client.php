<?php
header('Content-Type: text/plain');

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'http://localhost/server.php');
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLINFO_HEADER_OUT, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, array('params' => 'foo-bar-baz'));

$response = curl_exec($ch);
echo 'REQUEST HEADERS:' . PHP_EOL . PHP_EOL;
echo curl_getinfo($ch)['request_header'];
echo 'RESPONSE:' . PHP_EOL . PHP_EOL;
echo $response;

curl_close($ch);