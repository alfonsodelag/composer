<?php

use Guzzlehttp\Client;

$client = new Client([
    'base_uri' => 'http//httpbin.org'

    'timeout' => 2.0
]);

?>