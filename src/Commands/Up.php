<?php

declare(strict_types=1);

namespace Cross\Docker\Commands;

use Cross\Commands\Attributes\Attributes;
use Cross\Commands\Attributes\AttributesInterface;
use Cross\Commands\Attributes\AttributesKeeper;
use Cross\Config\Config;

class Up extends Command
{
    /**
     * @inheritDoc
     */
    protected string $name = 'docker:up';

    /**
     * @inheritDoc
     */
    protected string $description = 'Up containers';

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
    protected function command(): string
    {
        $container = $this->argument('container');

        $build = $this->whenOption('build', '--build');
        $removeOrphans = $this->whenOption('remove-orphans', '--remove-orphans');
        $detach = $this->whenNotOption('no-detach', '--detach');

        $options = Config::get("$this->name.options");

        return "docker-compose up $container $build $detach $removeOrphans $options";
    }
}
