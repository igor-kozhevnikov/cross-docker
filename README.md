# Docker

### Copy docker setting files

```sh
x docker:settings
```

### Install docker containers

```sh
x docker:install
```

### Build docker containers

```sh
x docker:build [options] [--] [<container>]
```

Arguments:

- `container` Container name

Options:

- `--no-cache` Don't use the cache

### Up docker containers

```sh
x docker:up [options]
```

Options:

- `--no-detach` Run containers in the front

### Down docker containers

```sh
x docker:down
```

### Start docker containers

```sh
x docker:start
```

### Stop docker containers

```sh
x docker:stop
```

### Restart docker containers

```sh
x docker:restart
```

### Execute the bash in the docker

```sh
x docker:ssh
x ssh
```

### Execute a command in the docker

```sh
x docker:exec [<shell>]
```

Arguments:

- `shell` Shell command for running in the docker
