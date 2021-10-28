FROM alpine:3.13

RUN apk update && apk upgrade
RUN apk add vsftpd openrc
COPY conf/vsftpd.conf /etc/vsftpd/
RUN adduser -D "ylazrek"
RUN echo "ylazrek:yasser" | chpasswd

CMD /usr/sbin/vsftpd  /etc/vsftpd/vsftpd.conf