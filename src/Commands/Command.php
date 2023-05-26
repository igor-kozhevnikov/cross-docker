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

        if ($paths = Config::get('docker.env_paths')) {
            if (is_string($paths)) {
                $paths = (array) $paths;
            }

            foreach ($paths as $path) {
                $content = @file_get_contents($path);

                if ($content) {
                    $env = array_merge($env, Dotenv::parse($content));
                }
            }
        }

        if ($config = Config::get('docker.env')) {
            $env = array_merge($env, $config);
        }

        return $env;
    }
}
