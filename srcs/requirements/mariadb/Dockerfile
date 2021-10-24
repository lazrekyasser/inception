FROM alpine:3.13

RUN apk update && apk upgrade
RUN apk add mysql mysql-client openrc
RUN openrc
RUN touch /run/openrc/softlevel
COPY ./tools/initdb.sh /tmp/
COPY ./tools/dbwordpress.sql /tmp/
COPY ./conf/mariadb-server.cnf /etc/my.cnf.d/
RUN chmod -R +x /tmp/initdb.sh
CMD sh /tmp/initdb.sh