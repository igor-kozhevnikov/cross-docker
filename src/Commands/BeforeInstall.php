<?php

declare(strict_types=1);

namespace Cross\Docker\Commands;

use Cross\Commands\ShellCommand;
use Cross\Commands\Config\Config;
use Cross\Commands\Statuses\Prepare;

class BeforeInstall extends ShellCommand
{
    /**
     * @inheritDoc
     */
    protected string $name = 'docker:before-install';

    /**
     * @inheritDoc
     */
    protected string $description = 'Runs a shell file before installation';

    /**
     * @inheritDoc
     */
    protected function prepare(): Prepare
    {
        $file = Config::get('docker.shells.before-install');

        if (file_exists($file)) {
            return Prepare::Continue;
        }

        return Prepare::Skip;
    }

    /**
     * @inheritDoc
     */
    protected function command(): string
    {
        return 'sh ' . Config::get('docker.shells.before-install');
    }
}
