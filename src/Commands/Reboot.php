<?php

declare(strict_types=1);

namespace Cross\Docker\Commands;

use Cross\Commands\Sequence\Sequence;
use Cross\Commands\Sequence\SequenceInterface;
use Cross\Commands\Sequence\SequenceKeeper;
use Cross\Commands\SequenceCommand;

class Reboot extends SequenceCommand
{
    /**
     * @inheritDoc
     */
    protected string $name = 'docker:reboot';

    /**
     * @inheritDoc
     */
    protected string $description = 'Reboot containers';

    /**
     * @inheritDoc
     */
    protected function sequence(): SequenceInterface|SequenceKeeper
    {
        return Sequence::make()
            ->item('docker:down')
            ->item('docker:up');
    }
}
