<?php

declare(strict_types=1);

namespace Cross\Docker\Commands;

use Cross\Commands\Attributes\Aliases;
use Cross\Commands\Attributes\Description;
use Cross\Commands\Attributes\Name;

#[Name('docker:start')]
#[Description('Start containers')]
class Start extends Command
{
    /**
     * @inheritDoc
     */
    protected string|array $command = 'docker-compose start';
}
