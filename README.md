eventsourcing-example-api
=========================

A Symfony project created on February 10, 2017, 9:10 am.


### Docker

```bash
docker-compose build
docker-compose run -d web
```

Find the id of the container, and check the IP:
```bash
docker ps -a
docker inspect --format '{{ .NetworkSettings.IPAddress }}' THE_ID
```

add IP to the `\etc\hosts` file:

```bash
IP      eventsourcing-api.dev
```




#### Functional tests

```bash
php vendor/bin/codecept run -c src/AppBundle/codeception.yml
```