<?php

declare(strict_types=1);

namespace Cross\Docker\Commands;

use Dotenv\Dotenv;
use Cross\Commands\ShellCommand;
use Cross\Commands\Config\Config;

abstract class Command extends ShellCommand
{
    /**
     * @inheritDoc
     */
    protected function env(): array
    {
        $path = Config::get('docker.env');
        $file = file_get_contents($path);
        return Dotenv::parse($file);
    }
}
