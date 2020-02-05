FROM debian:buster
RUN apt update &&\
apt install nginx -y &&\
apt install mariadb-server mariadb-client -y &&\
apt install wget -y &&\
apt install -y php-fpm php-mysql php-mbstring php-zip php-gd php-xml php-pear php-gettext php-cgi php-curl php-intl php-soap php-xmlrpc &&\
service mysql start &&\
service mysql start &&\
mkdir /source

COPY src/* /source/
RUN service mysql start &&\
mysql -u root -e "CREATE DATABASE wp";
RUN service nginx start &&\
service mysql start &&\
mv /source/default /etc/nginx/sites-enabled/default &&\
service mysql start &&\
mkdir /var/www/html/phpmyadmin &&\
wget https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-english.tar.gz &&\
tar xzf phpMyAdmin-4.9.0.1-english.tar.gz --strip-components=1 -C /var/www/html/phpmyadmin &&\
mv /source/config.inc.php /var/www/html/phpmyadmin/config.inc.php &&\
chmod 660 /var/www/html/phpmyadmin/config.inc.php &&\
chown -R www-data:www-data /var/www/html/phpmyadmin &&\
mv /source/wordpress /etc/nginx/sites-available/wordpress &&\
ln -s /etc/nginx/sites-available/wordpress /etc/nginx/sites-enabled/ &&\
wget https://wordpress.org/latest.tar.gz -P /tmp &&\
mkdir /var/www/html/wordpress &&\
tar xzf /tmp/latest.tar.gz --strip-components=1 -C /var/www/html/wordpress &&\
mv /source/wp-config.php /var/www/html/wordpress/wp-config.php &&\
chown -R www-data:www-data /var/www/html/wordpress &&\
service mysql reload &&\
mv /source/localhost.crt /etc/ssl/certs/localhost.crt &&\
mv /source/localhost.key /etc/ssl/private/localhost.key &&\
chmod +x /source/script.sh 
ENTRYPOINT "./source/script.sh"


