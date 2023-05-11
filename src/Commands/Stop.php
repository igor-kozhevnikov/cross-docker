<?php

declare(strict_types=1);

namespace Cross\Docker\Commands;

use Cross\Commands\Attributes\Aliases;
use Cross\Commands\Attributes\Description;
use Cross\Commands\Attributes\Name;

#[Name('docker:stop')]
#[Description('Stop containers')]
#[Aliases('stop')]
class Stop extends Command
{
    /**
     * @inheritDoc
     */
    protected function command(): string|array
    {
        $options = $this->config('options');
        return "docker-compose stop $options";
    }
}
