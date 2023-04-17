<?php

declare(strict_types=1);

namespace Cross\Docker\Commands;

use Cross\Attributes\Attributes;
use Cross\Attributes\AttributesInterface;
use Cross\Config\Config;

class Exec extends Command
{
    /**
     * @inheritDoc
     */
    protected string $name = 'docker:exec';

    /**
     * @inheritDoc
     */
    protected string $description = 'Execute a command in the docker';

    /**
     * @inheritDoc
     */
    protected function attributes(): AttributesInterface
    {
        return Attributes::make()
            ->argument('shell')->array()->description('Command for running in the docker')->end();
    }

    /**
     * @inheritDoc
     */
    protected function command(): string
    {
        $shell = $this->argument('shell');
        $shell = is_array($shell) ? join(' ', $shell) : $shell;
        $project = $this->env()['COMPOSE_PROJECT_NAME'];
        $container = Config::get('docker.executable_container');
        return "docker exec -it {$project}_$container $shell";
    }
}
