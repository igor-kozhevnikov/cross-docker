<?php

declare(strict_types=1);

namespace Cross\Docker\Commands;

use Cross\Config\Config;

class SSH extends Command
{
    /**
     * @inheritDoc
     */
    protected string $name = 'docker:ssh';

    /**
     * @inheritDoc
     */
    protected array $aliases = ['ssh'];

    /**
     * @inheritDoc
     */
    protected string $description = 'Execute a container';

    /**
     * @inheritDoc
     */
    protected function command(): string
    {
        $container = Config::get("$this->name.container");
        $options = Config::get("$this->name.options");
        $command = Config::get("$this->name.command");
        $arguments = Config::get("$this->name.arguments");

        return "docker exec $options $container $command $arguments";
    }
}
