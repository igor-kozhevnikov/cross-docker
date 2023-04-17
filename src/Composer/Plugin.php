<?php

declare(strict_types=1);

namespace Cross\Docker\Composer;

use Cross\Plugin\BasePlugin;

class Plugin extends BasePlugin
{
    /**
     * @inheritdoc
     */
    public string $key = 'docker';

    /**
     * @inheritDoc
     */
    public function getConfig(): array
    {
        return require __DIR__ . '/../../config/config.php';
    }
}
