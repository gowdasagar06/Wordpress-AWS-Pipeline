#!/bin/bash
cp -R /home/ubuntu/wordpress /var/www/ 2>/dev/null
rm -rf /etc/apache2/sites-available/000-default.conf
cp /var/www/wordpress/000-default.conf /etc/apache2/sites-available/
