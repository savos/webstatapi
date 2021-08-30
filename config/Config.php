<?php

namespace Config;

class Config
{
    const DBS = [
        [
            'connectionString' => 'mysql:host=localhost;dbname=webstatapi',
            'username' => '',
            'password' => '',
        ],
    ];

    const APIS = [
        [
            'host' => '',
            'route' => '',
            'token' => '',
        ],
    ];

    const FILES = [
        [
            'path' => '',
            'filename' => '',
        ],
    ];
}


