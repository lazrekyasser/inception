#! /bin/sh
if !(find /var/lib/mysql/ -mindepth 1 -maxdepth 1) | read; then
    /etc/init.d/mariadb setup

    service mariadb start
    mysql -u root -e "CREATE USER '${DB_USER}'@'%' IDENTIFIED BY '${DB_PASS}';"
    mysql -u root -e "GRANT ALL PRIVILEGES ON . TO '${DB_USER}'@'%' WITH GRANT OPTION;"
    mysql -u root -e "CREATE DATABASE ${DB_NAME};"
    mysql -u root -e "GRANT ALL PRIVILEGES ON ${DB_NAME}.* TO '${DB_USER}'@'%' WITH GRANT OPTION;"
    mysql -u root -e "FLUSH PRIVILEGES;"
    mysql -u root -D $DB_NAME < /tmp/dbwordpress.sql
    service mariadb stop
fi

# /usr/bin/mariadbd --basedir=/usr --datadir=/var/lib/mysql --plugin-dir=/usr/lib/mariadb/plugin --user=root --pid-file=/run/mysqld/mariadb.pid
mysqld_safe