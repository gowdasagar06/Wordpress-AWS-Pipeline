#!/bin/bash
apt install apache2 -y 2>/dev/null
systemctl start apache2 2>/dev/null
