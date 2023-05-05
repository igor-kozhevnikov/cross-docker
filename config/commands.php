<?php

return [
    \Cross\Docker\Commands\Build::class => [
        'options' => null,
    ],
    \Cross\Docker\Commands\Down::class => [
        'options' => null,
    ],
    \Cross\Docker\Commands\Restart::class,
    \Cross\Docker\Commands\SSH::class => [
        'container' => 'php-fpm',
        'options' => '-it',
        'command' => 'bash',
        'arguments' => null,
    ],
    \Cross\Docker\Commands\Start::class,
    \Cross\Docker\Commands\Stop::class => [
        'options' => null,
    ],
    \Cross\Docker\Commands\Up::class => [
        'options' => null,
    ],
];
