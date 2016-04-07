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
sed -i "/cd \/project/d" /home/vagrant/.bashrc
echo "cd /project" >> /home/vagrant/.bashrc

# install Docker
os_pseudo_name=$(cat /etc/lsb-release | grep '^DISTRIB_CODENAME' | awk -F=  '{ print $2 }')
apt-key adv \
    --keyserver hkp://p80.pool.sks-keyservers.net:80 \
    --recv-keys 58118E89F3A912897C070ADBF76221572C52609D
sh -c "echo 'deb https://apt.dockerproject.org/repo ubuntu-$os_pseudo_name main' > /etc/apt/sources.list.d/docker.list"
apt-get --yes update
apt-get --yes --ignore-missing --no-install-recommends install \
    docker-engine
usermod -aG docker vagrant
echo "Installed $(docker --version)"

# install Docker Compose
docker_compose_ver=$(curl -sSL https://github.com/docker/compose | grep '/docker/compose/tree/' | egrep '/[0-9]+\.[0-9+]\.[0-9]+"' | egrep -o '[0-9]+\.[0-9+]\.[0-9]+' | head -n 1)
curl -sSL https://github.com/docker/compose/releases/download/$docker_compose_ver/docker-compose-`uname -s`-`uname -m` \
    -o /usr/local/bin/docker-compose
chmod +x /usr/local/bin/docker-compose
echo "Installed $(docker-compose --version)"

# install Redis command-line tools
sudo apt-get install redis-tools

exit 0
