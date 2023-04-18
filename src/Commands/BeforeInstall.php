<?php

declare(strict_types=1);

namespace Cross\Docker\Commands;

use Cross\Commands\ShellCommand;
use Cross\Commands\Status\Status;
use Cross\Commands\Config\Config;

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
    protected function prepare(): Status
    {
        $file = Config::get('docker.shells.before-install');

        if (file_exists($file)) {
            return Status::Continue;
        }

        return Status::Skip;
    }

    /**
     * @inheritDoc
     */
    protected function command(): string
    {
        return 'sh ' . Config::get('docker.shells.before-install');
    }
}
