<?php

declare(strict_types=1);

namespace Cross\Docker\Commands;

use Cross\Attributes\Attributes;
use Cross\Attributes\AttributesInterface;
use Cross\Attributes\AttributesKeeper;
use Cross\Commands\Attributes\Description;
use Cross\Commands\Attributes\Name;
use Cross\Sequence\Sequence;
use Cross\Sequence\SequenceInterface;
use Cross\Sequence\SequenceKeeper;
use Cross\Commands\SequenceCommand;

#[Name('docker:restart')]
#[Description('Restart containers')]
class Restart extends SequenceCommand
{
    /**
     * @inheritDoc
     */
    protected function attributes(): AttributesInterface|AttributesKeeper
    {
        return Attributes::make()
            ->option('--down')->shortcut('-d')->none()->description('Down containers instead of stopping');
    }

    /**
     * @inheritDoc
     */
    protected function sequence(): SequenceInterface|SequenceKeeper
    {
        $down = $this->option('down');

        return Sequence::make()
            ->item(Stop::class)->whenNot($down)
            ->item(Start::class)->whenNot($down)
            ->item(Down::class)->when($down)
            ->item(Up::class)->when($down);
    }
}
