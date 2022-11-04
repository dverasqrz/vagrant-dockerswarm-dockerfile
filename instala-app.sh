#!/bin/bash
su - vagrant
docker volume create dados
docker run -e MYSQL_ROOT_PASSWORD="K5+wHDKz3Gf" -e MYSQL_DATABASE=meubanco --name mysql-dio -d -p 3306:3306 --mount type=volume,src=dados,dst=/var/lib/mysql dverazs/mysql5.7-dio:1.0
docker service create --name meuapp --replicas 10 -dt -p 80:80 --mount type=volume,src=app,dst=/app/ dverazs/phpapache8.1:1.0