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
        'scheme' => 'https',
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
        'client_id' => '899530017720530',
        'client_secret' => '96d5a152caa1f3e181839f3766e10b2b',
        'redirect' => 'http://localhost:8000/auth/facebook/callback'
    ],
    'google' => [
        'client_id' => '522713171182-09l14108uka9ih340ji2ur2sl0gls68m.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://localhost:8000/auth/google/callback'
    ]

];
