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
    // 'google' => [
    //     'client_id' => '780391228734-b6gc02ue0cefs6099udvsm8d74b271aj.apps.googleusercontent.com',
    //     'client_secret' => 'OcNDGjs4rfQT_c_IgIBmCraE',
    //     'redirect' => 'http://127.0.0.1:8000/callback/google',
    //   ], 

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
    // 'google' => [
    //     'client_id' => '780391228734-a5oph2u0jkp45s8c731fo77h1ol7ph20.apps.googleusercontent.com',
    //     'client_secret' => 'QWc7kF-UDI-5JnTj6x6wjVHr',
    //     'redirect' => 'http://127.0.0.1:8000/callback/google',
    //   ], 
      'facebook' => [
        // // // 'client_id' => '2811682365710799',
        'client_id' => '291224132202313',
        // 'client_secret' => 'fdde8dcb46dfc189a8b4789a880552f9',
        'client_secret' => '37ca24ce72522dc8d9646145d1d758c4',
        'redirect' => 'http://localhost:8000/login/facebook/callback',
      ],
      'google' => [
        // // // 'client_id' => '2811682365710799',
        'client_id' => env('GOOGLE_CLIENT_ID'),
        // 'client_secret' => 'fdde8dcb46dfc189a8b4789a880552f9',
        'client_secret' => env('GOOGLE_CLIENT_SECRET'),
        'redirect' => 'https://swappee.online/login/google/callback',
      ],


];
