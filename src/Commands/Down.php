<?php

declare(strict_types=1);

namespace Cross\Docker\Commands;

use Cross\Config\Config;

class Down extends Command
{
    /**
     * @inheritDoc
     */
    protected string $name = 'docker:down';

    /**
     * @inheritDoc
     */
    protected string $description = 'Down containers';

    /**
     * @inheritDoc
     */
    protected function command(): string
    {
        $options = Config::get("$this->name.options");

        return "docker-compose down $options";
    }
}
