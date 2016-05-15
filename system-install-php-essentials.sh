# Install apt-get packages
apt-get install -y joe ruby

# Configure apt-get package
sed -i "s/ -nobackups.*/-nobackups/" /etc/joe/joerc

# Install ruby gems
gem install sass
