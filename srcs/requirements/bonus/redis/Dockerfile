FROM alpine:3.13

RUN apk add redis
COPY ./conf/redis.conf /etc/
# RUN echo "maxmemory 256mb" >> /etc/redis.conf
# RUN echo "maxmemory-policy allkeys-lru" //remove the less recently used (LRU) keys first, in order to make space for the new data added >> /etc/redis.conf

CMD  /usr/bin/redis-server /etc/redis.conf