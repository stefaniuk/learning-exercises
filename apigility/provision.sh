#!/bin/bash

# fix 'stdin: is not a tty' issue
sed -i 's/^mesg n$/tty -s \&\& mesg n/g' /root/.profile

# set locale and timezone
apt-get install language-pack-en
locale-gen en_GB.UTF-8
update-locale LANG=en_GB.UTF-8 LC_CTYPE=en_GB.UTF-8
echo "Europe/London" | tee /etc/timezone
dpkg-reconfigure -f noninteractive tzdata

# make '/var/www' work directory
sed -i "/cd \/var\/www/d" /home/vagrant/.bashrc
echo "cd /var/www" >> /home/vagrant/.bashrc

exit 0
