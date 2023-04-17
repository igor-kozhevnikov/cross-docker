<?php

declare(strict_types=1);

namespace Cross\Docker\Commands;

use Cross\Commands\DeputyCommand;

class SSH extends DeputyCommand
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
    protected string $description = 'Execute the bash in the docker';

    /**
     * @inheritDoc
     */
    protected string $deputy = 'docker:exec';

    /**
     * @inheritDoc
     */
    protected array $parameters = ['shell' => 'bash'];
}
