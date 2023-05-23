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
        $env = [];

        if ($path = Config::get('docker.env_path')) {
            $content = @file_get_contents($path);
            $env = $content ? Dotenv::parse($content) : $env;
        }

        if ($overridden = Config::get('docker.env')) {
            $env = array_merge($env, $overridden);
        }

        return $env;
    }
}
