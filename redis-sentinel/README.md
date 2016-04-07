```
$ vagrant up
$ vagrant ssh
$ docker-compose up -d
$ docker-compose logs # Press `Ctrl-C` to exit
$ docker exec -it sentinel1 /bin/bash --login
$ redis-cli
$ INFO Sentinel
$ SENTINEL master mymaster
$ SENTINEL slaves mymaster
$ SENTINEL sentinels mymaster
```
