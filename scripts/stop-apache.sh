#!/bin/bash
if [ -f '/usr/lib/systemd/system/apache2.service' ]; then
systemctl stop apache2
rm -rf /var/www/wordpress
fi
