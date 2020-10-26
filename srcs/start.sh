#INSTALLATION

apt-get update
apt-get install -y wget
apt-get install -y nginx
apt-get install openssl
apt-get install -y mariadb-server mariadb-client
apt-get install -y php
apt-get purge -y apache2
apt-get install -y php-cli php-mysql php-cgi php-fpm php-mbstring
service mysql start
service php7.3-fpm start

#CONFIGURATION

#ssl
mkdir ./etc/nginx/ssl
openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/nginx/ssl/localhost.key -out /etc/nginx/ssl/localhost.crt -subj "/C=FR/ST=France/L=Paris/O=42_school/OU=Student/CN=hucoulon"

#nginx
mkdir -p /var/www/localhost/html
chown -R www-data: /var/www/*
chmod -R 755 var/www/*
mv index.html var/www/localhost/html
mv localhost etc/nginx/sites-available/
ln -s /etc/nginx/sites-available/localhost /etc/nginx/sites-enabled/

#database
echo "CREATE DATABASE wordpress;" | mysql -u root
echo "CREATE USER 'hucoulon'@'localhost' IDENTIFIED BY 'user42';" | mysql -u root
echo "GRANT ALL PRIVILEGES ON wordpress.* TO 'hucoulon'@'localhost';" | mysql -u root
echo "FLUSH PRIVILEGES;" | mysql -u root
mysql wordpress -u root < wordpress.sql

#wordpress
wget https://wordpress.org/latest.tar.gz
tar -xvzf latest.tar.gz
cp -a wordpress var/www/localhost
mv wp-config.php var/www/localhost/wordpress
#mv  wordpress.conf etc/nginx/sites-available
#ln -s /etc/nginx/sites-available/wordpress.conf /etc/nginx/sites-enabled

#phpmyadmin
wget https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-all-languages.tar.gz
tar -zxvf phpMyAdmin-4.9.0.1-all-languages.tar.gz
cp -a phpMyAdmin-4.9.0.1-all-languages var/www/localhost/phpmyadmin
mv config.inc.php var/www/localhost/phpmyadmin
mysql < /var/www/localhost/phpmyadmin/sql/create_tables.sql -u root
echo "GRANT ALL PRIVILEGES ON phpmyadmin.* TO 'hucoulon'@'localhost';" | mysql -u root
echo "FLUSH PRIVILEGES;" | mysql -u root
mv phpmyadmin.conf etc/nginx/conf.d/
mkdir var/www/localhost/phpmyadmin/tmp
chmod 777 var/www/localhost/phpmyadmin/tmp
#chown -R www-data:www-data /var/www/localhost/phpmyadmin

mkdir var/www/localhost/nginx
cp /var/www/html/index.nginx-debian.html var/www/localhost/nginx

#starting

service php7.3-fpm restart
service nginx start
service mysql restart

