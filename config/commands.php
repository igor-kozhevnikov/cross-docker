<?php

return [
    \Cross\Docker\Commands\Build::class,
    \Cross\Docker\Commands\Down::class,
    \Cross\Docker\Commands\Restart::class,
    \Cross\Docker\Commands\Reboot::class,

    \Cross\Docker\Commands\SSH::class => [
        'container' => 'php-fpm',
        'options' => '-it',
        'command' => 'bash',
        'arguments' => '',
    ],

    \Cross\Docker\Commands\Start::class,
    \Cross\Docker\Commands\Stop::class,
    \Cross\Docker\Commands\Up::class,
];
