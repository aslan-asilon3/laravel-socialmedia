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

    'google' => [
        'client_id' => '450995278514-pjdum6b2r2b7ql1cau9qdfrvn6mh6s3f.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://localhost:8000/auth/google/callback',
      ], 

      'facebook' => [
        'client_id' => env('382923450488162'),
        'client_secret' => env('5d187736a262c44232570798a133ec67'),
        'redirect' => env('http://localhost:8000/auth/facebook/callback'),
     ],

      'instagram' => [
        'client_id' => env('1907707236096167'),
        'client_secret' => env('e50852a3038360ecdf6e4a52d2502bd6'),
        'redirect' => env('http://localhost:8000/auth/instagram/callback'),
     ],
     

      

];
