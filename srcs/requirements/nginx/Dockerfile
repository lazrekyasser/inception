FROM alpine:3.13
RUN apk update && apk upgrade
RUN apk add nginx openssl dumb-init
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt -subj "/C=MA/ST=Khouribga/L=Khouribga/O=1337/CN=ylazrek"
COPY ./conf/nginx.conf /etc/nginx/
RUN mkdir -p /run/nginx/

ENTRYPOINT ["/usr/bin/dumb-init", "--"]
CMD ["nginx", "-g", "daemon off;"]

EXPOSE 443