<?php

declare(strict_types=1);

namespace Cross\Docker\Commands;

use Cross\Config\Config;

class Stop extends Command
{
    /**
     * @inheritDoc
     */
    protected string $name = 'docker:stop';

    /**
     * @inheritDoc
     */
    protected string $description = 'Stop containers';

    /**
     * @inheritDoc
     */
    protected function command(): string
    {
        $options = Config::get("$this->name.options");

        return "docker-compose stop $options";
    }
}
