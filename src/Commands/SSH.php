<?php

declare(strict_types=1);

namespace Cross\Docker\Commands;

use Cross\Commands\Attributes\Aliases;
use Cross\Commands\Attributes\Description;
use Cross\Commands\Attributes\Name;

#[Name('docker:ssh')]
#[Description('Go into a container')]
class SSH extends Command
{
    /**
     * @inheritDoc
     */
    protected function command(): string|array
    {
        $container = $this->config('container');
        $options = $this->config('options');
        $command = $this->config('command');
        $arguments = $this->config('arguments');
        return "docker exec $options $container $command $arguments";
    }
}
