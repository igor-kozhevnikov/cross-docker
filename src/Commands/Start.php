<?php

declare(strict_types=1);

namespace Cross\Docker\Commands;

class Start extends Command
{
    /**
     * @inheritDoc
     */
    protected string $name = 'docker:start';

    /**
     * @inheritDoc
     */
    protected string $description = 'Start the docker containers';

    /**
     * @inheritDoc
     */
    protected string $command = 'docker-compose start';
}
