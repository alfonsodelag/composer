<?php

require 'vendor/autoload.php';


$client = new \GuzzleHttp\Client();
//var_dump($client);
$res = $client->request('GET', 'https://itunes.apple.com/lookup?isbn=9780316069359', [
    'auth' => ['user', 'pass']
]);
echo $res->getStatusCode();
// "200"
echo $res->getHeader('content-type')[0];
// 'application/json; charset=utf8'
echo $res->getBody();
// {"type":"User"...'

// Send an asynchronous request.
$request = new \GuzzleHttp\Psr7\Request('GET', 'http://httpbin.org');
$promise = $client->sendAsync($request)->then(function ($response) {
    echo 'I completed! ' . $response->getBody();
});
$promise->wait();

?>