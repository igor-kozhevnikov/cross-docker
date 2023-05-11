<?php

declare(strict_types=1);

namespace Cross\Docker\Commands;

use Cross\Attributes\Attributes;
use Cross\Attributes\AttributesInterface;
use Cross\Attributes\AttributesKeeper;
use Cross\Commands\Attributes\Description;
use Cross\Commands\Attributes\Name;

#[Name('docker:up')]
#[Description('Up containers')]
class Up extends Command
{
    /**
     * @inheritDoc
     */
    protected function attributes(): AttributesInterface|AttributesKeeper
    {
        return Attributes::make()
            ->argument('container')->optional()->description('Container name for upping')
            ->option('--build')->none()->description('Build and run containers')
            ->option('--remove-orphans')->none()->description('Run containers with removing orphans')
            ->option('--no-detach')->none()->description('Run containers in front');
    }

    /**
     * @inheritDoc
     */
    protected function command(): string|array
    {
        $container = $this->argument('container');
        $build = $this->whenOption('build', '--build');
        $orphans = $this->whenOption('remove-orphans', '--remove-orphans');
        $detach = $this->whenNotOption('no-detach', '--detach');
        $options = $this->config('options');
        return "docker-compose up $container $build $detach $orphans $options";
    }
}
