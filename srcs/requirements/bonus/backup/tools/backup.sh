#! /bin/sh

while true
do
    if [ "$(ls -A /mariadb)" ]; then
        DATE=$(date +"%m-%d-%Y_%T")
        mkdir -p $DATE
        cp -Rf /mariadb /backup/$DATE
    fi
    sleep 180
done