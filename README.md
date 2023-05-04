# Docker

A set of commands for working with docker containers.

## Install

```shell
composer require igor-kozhevnikov/cross-docker
```

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

### Reboot containers

Use the `docker:down` command and then the `docker:up`.

```shell
./vendor/bin/cross docker:reboot
```

### Restart containers

Use the `docker:stop` command and then the `docker:start`.

```shell
./vendor/bin/cross docker:restart
```

### Go into a container

```shell
./vendor/bin/cross docker:ssh
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

### Stop containers

```shell
./vendor/bin/cross docker:stop
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
