<?php

declare(strict_types=1);

namespace Cross\Docker\Commands;

class Down extends Command
{
    /**
     * @inheritDoc
     */
    protected string $name = 'docker:down';

    /**
     * @inheritDoc
     */
    protected string $description = 'Down the docker containers';

    /**
     * @inheritDoc
     */
    protected string|array $command = 'docker-compose down';
}
