# Cross for Docker

Set of commands for docker.

## Install

This package depends on [Cross](https://github.com/igor-kozhevnikov/cross) package.

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
