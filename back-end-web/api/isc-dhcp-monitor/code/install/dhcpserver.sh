echo "update & upgrade"
sudo apt update -y > /dev/null
sudo apt upgrade -y > /dev/null

echo "install apache2"
sudo apt install apache2 -y > /dev/null
sudo rm /var/www/html/index.html > /dev/null

echo "install php7.2"
sudo apt install php7.2 -y > /dev/null
sudo sed -i -r -e 's/display_errors = Off/display_errors = On/g' /etc/php/7.2/apache2/php.ini
sudo systemctl restart apache2 > /dev/null

echo "install isc-dhcp-server"
sudo apt install isc-dhcp-server dhcpd-pools -y > /dev/null
sudo cp /etc/dhcp/dhcpd.conf{,.backup}
sudo cp /var/www/html/install/dhcpd.conf /etc/dhcp/dhcpd.conf
sudo systemctl restart isc-dhcp-server > /dev/null

echo "oui.txt (Organizationally unique identifier)"
# http://standards-oui.ieee.org/oui.txt
# https://linuxnet.ca/ieee/oui/
sudo wget https://linuxnet.ca/ieee/oui.txt -o /usr/local/etc/oui.txt


echo "finish"