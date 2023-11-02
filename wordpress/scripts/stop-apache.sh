#!/bin/bash
if [ -f '/usr/lib/systemd/system/apache2.service' ]; then
sudo systemctl stop apache2
fi
