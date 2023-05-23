<?php

declare(strict_types=1);

namespace Cross\Docker\Commands;

use Dotenv\Dotenv;
use Cross\Commands\ShellCommand;
use Cross\Config\Config;

abstract class Command extends ShellCommand
{
    /**
     * @inheritDoc
     */
    protected function env(): array
    {
        $envPath = Config::get('docker.env_path');
        $envFile = @file_get_contents($envPath);
        $env = $envFile ? Dotenv::parse($envFile) : [];

        if (Config::has('docker.compose_file_path')) {
            $env['COMPOSE_FILE'] = Config::get('docker.compose_file_path');
        }

        return $env;
    }
}
