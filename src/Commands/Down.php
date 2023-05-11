<?php

declare(strict_types=1);

namespace Cross\Docker\Commands;

use Cross\Commands\Attributes\Description;
use Cross\Commands\Attributes\Name;

#[Name('docker:down')]
#[Description('Down containers')]
class Down extends Command
{
    /**
     * @inheritDoc
     */
    protected function command(): string|array
    {
        $options = $this->config('options');
        return "docker-compose down $options";
    }
}
