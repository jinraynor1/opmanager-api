<?php
require_once __DIR__ . '/../vendor/autoload.php';
use Jinraynor1\OpManager\Api\Client;

// example of long level access to opmanager

Client::setApiUrl('http://localhost:8080');
Client::setApiKey('e1c1787b1dde5a91b6a4343d3da5737c');
Client::setDebug(Client::debug_basic);//Client::debug_all

// This is larger than example_2.php
$response =Client::doRequest(array(
    'section'=>'device',
    'method'=>'listDevices',
    'type'=>'GET',
    'parameters'=>array('var'=>'123')
));
// response is json string
var_dump($response);

