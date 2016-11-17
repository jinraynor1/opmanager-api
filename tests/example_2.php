<?php
require_once __DIR__ . '/../vendor/autoload.php';
use Jinraynor1\OpManager\Api\Main;

// example of short level access to opmanager

Main::initialize(array(
    'apiUrl' => 'http://localhost:8080',
    'apiKey' => 'e1c1787b1dde5a91b6a4343d3da5737c'
));

//Note than this is shorter than example_1
$response=Main::dispatcher('listDevices',array('var1'=>100));
// response is json_decoded
var_dump($response);

