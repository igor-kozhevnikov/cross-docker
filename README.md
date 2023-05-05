# Cross for Docker

[![PHP](https://img.shields.io/badge/php-8.1-green.svg?style=flat-square)](https://github.com/igor-kozhevnikov/cross-docker)
[![License](https://img.shields.io/github/license/igor-kozhevnikov/cross-docker?style=flat-square)](https://github.com/igor-kozhevnikov/cross-docker)
[![Release](https://img.shields.io/github/v/release/igor-kozhevnikov/cross-docker?style=flat-square)](https://github.com/igor-kozhevnikov/cross-docker)

Set of console commands for docker.

## Install

This package depends on [Cross](https://github.com/igor-kozhevnikov/cross) package.

```shell
composer require igor-kozhevnikov/cross-docker
```

## Configuration

If your project doesn't have a `cross.php` config file in the root directory, just run the follow command.

```shell
./vendor/bin/cross cross:config
```

Add data as described below to the `cross.php` file.

```php
<?php

return [
    'plugins' => [
        \Cross\Docker\Plugin\Plugin::class => [
            'env_path' => 'docker/.env',
        ],
    ],
    'commands' => [
        \Cross\Docker\Commands\SSH::class => [
            'container' => 'packager_workspace',
        ],
    ],
];
```

To learn more about the available configurations, see the [plugin](https://github.com/igor-kozhevnikov/cross-docker/blob/1.x/config/config.php) and [commands](https://github.com/igor-kozhevnikov/cross-docker/blob/1.x/config/commands.php) config files.

## Commands

### Build containers

```shell
./vendor/bin/cross docker:build [options] [--] [<container>]
```

Arguments:

- `container` Container for building

Options:

- `--no-cache` Don't use cache during build

Config:

- `options` Applied options

### Down containers

```shell
./vendor/bin/cross docker:down
```

Config:

- `options` Applied options

### Restart containers

```shell
./vendor/bin/cross docker:restart [options]
```

Options:

- `-d` `--down` Downing containers instead of stopping

### Go into a container

```shell
./vendor/bin/cross docker:ssh
```

```shell
./vendor/bin/cross ssh
```

Config:

- `container` Container to enter
- `options` Applied options
- `command` Command to execute
- `arguments` Applied arguments for the command

### Start containers

```shell
./vendor/bin/cross docker:start
```

```shell
./vendor/bin/cross start
```

### Stop containers

```shell
./vendor/bin/cross docker:stop
```

```shell
./vendor/bin/cross stop
```

Config:

- `options` Applied options

### Up containers

```shell
./vendor/bin/cross docker:up [options] [--] [<container>]
```

Arguments:

- `container` Container to up

Options:

- `--build` Build and run containers
- `--remove-orphans` Run containers with removing orphans
- `--no-detach` Run containers in front

Config:

- `options` Applied options

## License

The Cross for Docker is open-sourced software licensed under the [MIT license](https://opensource.org/license/mit/).
