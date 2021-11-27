#! /bin/sh

adduser -D $DB_USER
echo "$DB_USER:$DB_PASS" | chpasswd
chown -R ylazrek:ylazrek /home/ylazrek