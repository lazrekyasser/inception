#! /bin/sh
if !(find /var/lib/mysql/ -mindepth 1 -maxdepth 1) | read; then
    /etc/init.d/mariadb setup

    service mariadb start
    mysql -u root -e "CREATE DATABASE ${DB_NAME};"

    mysql -u root -e "CREATE USER '${DB_USER}'@'%' IDENTIFIED BY '${DB_PASS}';"
    mysql -u root -e "GRANT ALL PRIVILEGES ON *.* TO '${DB_USER}'@'%';"

    mysql -u root -e "CREATE USER '${DB_USER}'@'localhost' IDENTIFIED BY '${DB_PASS}';"
    mysql -u root -e "GRANT ALL PRIVILEGES ON *.* TO '${DB_USER}'@'localhost';"

    mysql -u root -e "FLUSH PRIVILEGES;"
    mysql -u root -D $DB_NAME < /tmp/dbwordpress.sql
    mysql -u root -e "ALTER USER 'root'@'localhost' IDENTIFIED BY '${DB_ROOT_PASS}';"
    mysql -u root -e "FLUSH PRIVILEGES;"

    service mariadb stop
fi

mysqld_safe