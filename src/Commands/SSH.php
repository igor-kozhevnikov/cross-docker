<?php

declare(strict_types=1);

namespace Cross\Docker\Commands;

use Cross\Commands\DelegateCommand;
use Symfony\Component\Console\Command\Command;

class SSH extends DelegateCommand
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
    protected string $description = 'Execute the docker container';

    /**
     * @inheritDoc
     */
    protected string|Command $delegate = 'docker:exec';

    /**
     * L
     *
     * @var array<string, string>
     */
    protected array $parameters = ['shell' => 'bash'];
}
