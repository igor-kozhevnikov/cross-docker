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
        $container = Config::get("$this->name.container", 'php-fpm');
        $options = Config::get("$this->name.options", '-it');
        $shell = Config::get("$this->name.shell", 'bash');

        return "docker exec $options $container $shell";
    }
}
