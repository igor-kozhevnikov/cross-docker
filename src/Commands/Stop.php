<?php

declare(strict_types=1);

namespace Cross\Docker\Commands;

class Stop extends Command
{
    /**
     * @inheritDoc
     */
    protected string $name = 'docker:stop';

    /**
     * @inheritDoc
     */
    protected string $description = 'Stop the docker containers';

    /**
     * @inheritDoc
     */
    protected string $command = 'docker-compose stop';
}
