#!/bin/bash
cp -R /home/ubuntu/wordpress /var/www/ 2>/dev/null
rm -rf /etc/apache2/sites-available/000-default.conf
cp /var/www/wordpress/000-default.conf /etc/apache2/sites-available/
# sudo sed -i '12c\ DocumentRoot "/var/www/wordpress"' /etc/apache2/sites-available/000-default.conf 2>/dev/null
