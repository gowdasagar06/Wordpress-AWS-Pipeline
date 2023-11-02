#!/bin/bash
sudo unzip /home/ubuntu/wordpress.zip 2>/dev/null
sudo cp -R /home/ubuntu/wordpress /wordpress /var/www/ 2>/dev/null
sudo rm -rf /etc/apache2/sites-available/000-default.conf
sudo cp /var/www/wordpress/000-default.conf /etc/apache2/sites-available/
