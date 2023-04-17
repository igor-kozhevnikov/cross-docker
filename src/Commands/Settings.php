<?php

declare(strict_types=1);

namespace Cross\Docker\Commands;

use Cross\Commands\ShellCommand;
use Cross\Messages\Messages;
use Cross\Messages\MessagesInterface;
use Cross\Config\Config;

class Settings extends ShellCommand
{
    /**
     * @inheritDoc
     */
    protected string $name = 'docker:settings';

    /**
     * @inheritDoc
     */
    protected string $description = 'Copy docker setting files';

    /**
     * Define messages.
     */
    protected function messages(): MessagesInterface
    {
        return Messages::make()
            ->success('Docker settings copied');
    }

    /**
     * @inheritDoc
     */
    protected function command(): string
    {
        $containers = Config::get('docker.containers');
        $settings = Config::get('docker.settings');

        $copyEverything = "cp -r $settings/* $containers";
        $copyEnv = "cp $settings/.env $containers";

        return "$copyEverything && $copyEnv";
    }
}
