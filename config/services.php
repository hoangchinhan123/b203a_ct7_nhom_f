<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'facebook' => [
        'client_id' => '208251227064009',  //client face của bạn
        'client_secret' => '2d1c4a61ec283b1e63a484860f290b59',  //client app service face của bạn
        'redirect' => 'http://127.0.0.1:8000/login-checkout' //callback trả về
    ],
    
    'google' => [
        'client_id' => '587558366742-n2gl781eut9f848gjmfr5t6ujsghmkkd.apps.googleusercontent.com',
        'client_secret' => 'ZkIGxQR7Js7yemREjaC8LGnU',
        'redirect' => 'http://127.0.0.1:8000/login-checkout' 
    ],
];
