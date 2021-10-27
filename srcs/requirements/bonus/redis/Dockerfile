FROM alpine:3.13

RUN apk add redis
COPY ./conf/redis.conf /etc/
# RUN echo "maxmemory 256mb" >> /etc/redis.conf
# RUN echo "maxmemory-policy allkeys-lru" >> /etc/redis.conf
# RUN openrc
# RUN service redis-server restart
CMD  /usr/bin/redis-server /etc/redis.conf