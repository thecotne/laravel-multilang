<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Multilang Settings
    |--------------------------------------------------------------------------
    |
    | Multilang is enabled by default, when ServiceProvider is included in config/app.php.
    |
     */
    'enabled'        => true,

    /*
    |--------------------------------------------------------------------------
    | Available locales/languages
    |--------------------------------------------------------------------------
    |
    | Available locales for routing
    |
     */
    'locales'        => [
        'en' => [
            'name'        => 'English',
            'native_name' => 'English',
            'default'     => true,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Autosave missing strings in database
    |--------------------------------------------------------------------------
    |
    | Multilang will autosave missing texts in database. Only on when environment is local
    |
     */
    'autosave'       => true,

    /*
    |--------------------------------------------------------------------------
    | Cache translated texts
    |--------------------------------------------------------------------------
    |
    | Multilang will cache texts from database for improving performance. Only on when environment is production
    |
     */
    'cache'          => true,

    /*
    |--------------------------------------------------------------------------
    | Cache lifetime
    |--------------------------------------------------------------------------
    |
    | Cache lifetime in minutes
    |
     */
    'cache_lifetime' => 1440,

    /*
    |--------------------------------------------------------------------------
    | Texts table name
    |--------------------------------------------------------------------------
    |
    | You can change texts table name.
    |
     */
    'texts_table'    => 'texts',
];
