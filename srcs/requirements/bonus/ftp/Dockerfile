FROM alpine:3.13

RUN apk update && apk upgrade
RUN apk add vsftpd openrc
COPY conf/vsftpd.conf /etc/vsftpd/
COPY conf/init.sh /tmp

CMD sh ./tmp/init.sh && /usr/sbin/vsftpd  /etc/vsftpd/vsftpd.conf