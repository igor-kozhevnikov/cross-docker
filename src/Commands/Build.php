<?php

declare(strict_types=1);

namespace Cross\Docker\Commands;

use Cross\Attributes\Attributes;
use Cross\Attributes\AttributesInterface;
use Cross\Attributes\AttributesKeeper;
use Cross\Commands\Attributes\Description;
use Cross\Commands\Attributes\Name;

#[Name('docker:build')]
#[Description('Build containers')]
class Build extends Command
{
    /**
     * @inheritDoc
     */
    protected function attributes(): AttributesInterface|AttributesKeeper
    {
        return Attributes::make()
            ->argument('container')->optional()->description('Container for building')
            ->option('--no-cache')->none()->description("Don't use cache during build");
    }

    /**
     * @inheritDoc
     */
    protected function command(): string|array
    {
        $container = $this->argument('container');
        $cache = $this->whenOption('no-cache', '--no-cache');
        $options = $this->config('options');
        return "docker-compose build $container $cache $options";
    }
}
