<?php 

function getNoImage() {
    $f_noImage='assets/images/Noimage.png';
    return $f_noImage;
}

function config($type) {
    $all_config = [
        'db' => [
            'host' => 'localhost',
            'user' => 'root',
            'password' => env('DB_PASSWORD'),
            'db' => 'shop'
        ]
    ];
    $result = $all_config[$type];
    return $result;
}
