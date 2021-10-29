FROM alpine:3.13

RUN apk update && apk upgrade
RUN apk add nodejs
RUN mkdir /site
COPY ./tools/index.html /site
COPY ./tools/app.js /site
RUN apk add dumb-init
ENTRYPOINT [ "/usr/bin/dumb-init", "--" ]
CMD node /site/app.js
# if [ ! -d /var/www/site ];then mv /site /var/www/; fi &&