<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => '2198375630432588',         // Your GitHub Client ID
        'client_secret' => '6423794e4ccbd99cb2ef5ca2099b1c8d', // Your GitHub Client Secret
        'redirect' => 'http://localhost:8000/login/facebook/callback',
    ],

    'google' => [
        'client_id' => '292585836724-qhsltssnjllrv6sa7kv5lia5618u11ge.apps.googleusercontent.com',         // Your GitHub Client ID
        'client_secret' => 'YN1IUSZWzGvaX0MXD5xdfo3k', // Your GitHub Client Secret
        'redirect' => env('REDIRECT_GOOGLE'),
    ],

];
