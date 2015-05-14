<?php
require_once 'vendor/autoload.php';
use Guzzle\Http\Client;

$client = new Client('https://api.github.com');

$request = $client->get('/user')->setAuth('', '');
// Send the request and get the response
$response = $request->send();
echo $response->getBody();
