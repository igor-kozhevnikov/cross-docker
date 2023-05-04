<?php

declare(strict_types=1);

namespace Cross\Docker\Commands;

use Cross\Commands\Attributes\Attributes;
use Cross\Commands\Attributes\AttributesInterface;
use Cross\Commands\Attributes\HasAttributes;

class Build extends Command
{
    /**
     * @inheritDoc
     */
    protected string $name = 'docker:build';

    /**
     * @inheritDoc
     */
    protected string $description = 'Build the docker containers';

    /**
     * @inheritDoc
     */
    protected function attributes(): AttributesInterface|HasAttributes
    {
        return Attributes::make()
            ->argument('container')->optional()->description('Container name')
            ->option('--no-cache')->none()->description("Don't use the cache");
    }

    /**
     * @inheritDoc
     */
    protected function command(): string
    {
        $container = $this->argument('container');
        $cache = $this->whenOption('no-cache', '--no-cache');
        return "docker-compose build $container $cache";
    }
}
