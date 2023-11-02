#!/bin/bash
sudo rm -rf /etc/apache2/sites-available/000-default.conf
sudo cp /var/www/wordpress/000-default.conf /etc/apache2/sites-available/
