<?php

declare(strict_types=1);

namespace Cross\Docker\Commands;

use Cross\Commands\Attributes\Attributes;
use Cross\Commands\Attributes\AttributesInterface;
use Cross\Commands\Attributes\HasAttributes;

class Up extends Command
{
    /**
     * @inheritDoc
     */
    protected string $name = 'docker:up';

    /**
     * @inheritDoc
     */
    protected string $description = 'Up the docker containers';

    /**
     * @inheritDoc
     */
    protected function attributes(): AttributesInterface|HasAttributes
    {
        return Attributes::make()
            ->argument('container')->optional()->description('Container name')
            ->option('--build')->none()->description('Run containers with building')
            ->option('--remove-orphans')->none()->description('Run containers with removing orphans')
            ->option('--no-detach')->none()->description('Run containers in the front');
    }

    /**
     * @inheritDoc
     */
    protected function command(): string
    {
        $container = $this->argument('container');
        $build = $this->whenOption('build', '--build');
        $removeOrphans = $this->whenOption('remove-orphans', '--remove-orphans');
        $detach = $this->whenNotOption('no-detach', '--detach');
        return "docker-compose up $container $build $detach $removeOrphans";
    }
}
