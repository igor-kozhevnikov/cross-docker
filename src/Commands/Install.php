<?php

declare(strict_types=1);

namespace Cross\Docker\Commands;

use Cross\Commands\SequenceCommand;
use Cross\Sequence\Sequence;
use Cross\Sequence\SequenceInterface;

class Install extends SequenceCommand
{
    /**
     * @inheritDoc
     */
    protected string $name = 'docker:install';

    /**
     * @inheritDoc
     */
    protected string $description = 'Install docker containers';

    /**
     * @inheritDoc
     */
    protected function sequence(): SequenceInterface
    {
        return Sequence::make()
            ->command('docker:before-install')->end()
            ->command('docker:settings')->end()
            ->command('docker:build')->input(['--no-cache' => true])->end()
            ->command('docker:up')->end();
    }
}
