<?php

require 'vendor/autoload.php';

use Guzzle\Http\Client;

$client = new Client(['base_url'=>'http://localhost:9999']);

$response = $client->get('/user');

