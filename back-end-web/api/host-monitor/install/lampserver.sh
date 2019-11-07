echo "Updating apt"
sudo apt-get -y update > /dev/null

echo "Installing Apache"
sudo apt-get -y install apache2 > /dev/null

echo "Installing PHP"
sudo LC_ALL=C.UTF-8 add-apt-repository -y ppa:ondrej/php > /dev/null
sudo apt-get -y update > /dev/null
sudo LC_ALL=C.UTF-8 apt-get -y install php7.1 php7.1-mysql > /dev/null
sudo service apache2 restart > /dev/null

echo "Installing MySQL"
DBPASSWD=abc123
echo "mysql-server mysql-server/root_password password $DBPASSWD" | sudo debconf-set-selections  > /dev/null
echo "mysql-server mysql-server/root_password_again password $DBPASSWD" | sudo debconf-set-selections  > /dev/null
  sudo apt-get -y install mysql-server  > /dev/null
# https://support.plesk.com/hc/en-us/articles/213904365-How-to-enable-remote-access-to-MySQL-database-server
sudo sed -i -r -e 's/127.0.0.1/0.0.0.0/g' /etc/mysql/my.cnf
sudo service mysql restart > /dev/null
mysql -uroot -p"$DBPASSWD" -e "GRANT ALL PRIVILEGES ON *.* TO 'root'@'%' IDENTIFIED BY '$DBPASSWD' REQUIRE NONE WITH GRANT OPTION; FLUSH PRIVILEGES;"

echo "Vagrant finish"