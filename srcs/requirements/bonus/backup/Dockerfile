FROM alpine:3.13

RUN apk update && apk upgrade
RUN apk add dumb-init
COPY tools/backup.sh /
RUN chmod +x backup.sh
RUN mkdir mariadb
RUN mkdir backup

ENTRYPOINT [ "/usr/bin/dumb-init", "--" ]
CMD [ "sh", "backup.sh" ]