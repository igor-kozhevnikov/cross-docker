<?php

declare(strict_types=1);

namespace Cross\Docker\Commands;


use Cross\Commands\Attributes\Attributes;
use Cross\Commands\Attributes\AttributesInterface;

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
    protected function attributes(): AttributesInterface
    {
        return Attributes::make()
            ->argument('container')->optional()->description('Container name')->end()
            ->option('--build')->none()->description('Run containers with building')->end()
            ->option('--remove-orphans')->none()->description('Run containers with removing orphans')->end()
            ->option('--no-detach')->none()->description('Run containers in the front')->end();
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
