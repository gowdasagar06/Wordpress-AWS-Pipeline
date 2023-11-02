# #!/bin/bash
# sudo apt install apache2 -y
# sudo apt install php libapache2-mod-php php-mysql -y
# sudo apt update -y
# sudo apt install php-curl php-gd php-mbstring php-xml php-xmlrpc php-soap php-intl php-zip -y
# sudo systemctl start apache2
# sudo a2enmod rewrite
# sudo apache2ctl configtest
# sudo systemctl restart apache2
# sudo unzip /home/ubuntu/wordpress.zip 2>/dev/null
sudo cp -R /opt/codedeploy-agent/deployment-root/c8cd40ab-e5d5-43f4-b338-b4e787fe346f/d-FQXZOB1F1/deployment-archive/wordpress /var/www/
