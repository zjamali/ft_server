#!/bin/bash
service --status-all
service nginx start
service php7.3-fpm start
service mysql start
mysql -u root -e "SET PASSWORD FOR 'root'@'localhost' = PASSWORD('passwd')";
service --status-all
service mysql restart
service --status-all
/bin/bash