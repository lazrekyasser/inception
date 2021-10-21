FROM alpine:3.13
RUN apk update && apk upgrade
RUN apk add php7 php7-fpm php7-opcache wget
RUN mkdir /var/www
WORKDIR /
RUN wget https://wordpress.org/latest.tar.gz && tar xzf latest.tar.gz
# RUN rm latest.tar.gz
