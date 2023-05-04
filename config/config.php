<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Docker containers
    |--------------------------------------------------------------------------
    */

    'containers' => 'docker/containers',

    /*
    |--------------------------------------------------------------------------
    | Docker settings of containers
    |--------------------------------------------------------------------------
    */

    'settings' => 'docker/settings',

    /*
    |--------------------------------------------------------------------------
    | Docker shell commands
    |--------------------------------------------------------------------------
    */

    'shells' => [
        'before-install' => 'docker/shells/before-install.sh',
    ],

    /*
    |--------------------------------------------------------------------------
    | Environment
    |--------------------------------------------------------------------------
    */

    'env' => 'docker/containers/.env',

    /*
    |--------------------------------------------------------------------------
    | Executable container
    |--------------------------------------------------------------------------
    */

    'executable_container' => 'workspace',

    /*
    |--------------------------------------------------------------------------
    | Commands
    |--------------------------------------------------------------------------
    */

    'commands' => [
        \Cross\Docker\Commands\Build::class,
        \Cross\Docker\Commands\Down::class,
        \Cross\Docker\Commands\Exec::class,
        \Cross\Docker\Commands\Restart::class,
        \Cross\Docker\Commands\SSH::class,
        \Cross\Docker\Commands\Start::class,
        \Cross\Docker\Commands\Stop::class,
        \Cross\Docker\Commands\Up::class,
    ],

];
