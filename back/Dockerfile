FROM mysql:5.7

WORKDIR /var/lib/mysql

ENV MYSQL_ROOT_PASSWORD=K5+wHDKz3Gf
ENV MYSQL_DATABASE=meubanco

ADD /vagrant/banco.sql /docker-entrypoint-initdb.d

EXPOSE 3306