<?php

declare(strict_types=1);

namespace Cross\Docker\Commands;

use Cross\Commands\SequenceCommand;
use Cross\Sequence\Sequence;
use Cross\Sequence\SequenceInterface;

class Restart extends SequenceCommand
{
    /**
     * @inheritDoc
     */
    protected string $name = 'docker:restart';

    /**
     * @inheritDoc
     */
    protected string $description = 'Restart docker containers';

    /**
     * @inheritDoc
     */
    protected function sequence(): SequenceInterface
    {
        return Sequence::make()
            ->command('docker:stop')->end()
            ->command('docker:start')->end();
    }
}
