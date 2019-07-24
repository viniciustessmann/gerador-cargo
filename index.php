<?php

require 'vendor/autoload.php';

use SdkMelhorEnvio\Quotation;

$data = [
    'to' => [
        'postal_code' => 96020362
    ],
    'from' => [
        'postal_code' => 96020360
    ],
    'volumes' => [
        "height" =>  10,
        "width" =>  10,
        "length" =>  10,
        "weight" =>  10,
        "insurance" =>  20.50
    ],
    'packaging' => [
        "height" =>  10,
        "width" =>  10,
        "length" =>  10,
    ]
];

// var_dump(\SdkMelhorEnvio\Quotation::make($data));

putenv("UNIQID=teste");
getenv('REFRESH_TOKEN');    
var_dump($_ENV['REFRESH_TOKEN']);