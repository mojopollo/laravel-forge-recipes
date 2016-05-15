# Stop services installed by forge
service mysql stop
service postgresql stop
service beanstalkd stop
service redis-server stop
service memcached stop

# Disable services installed by forge
# from starting at boot time
systemctl disable mysql.service
systemctl disable postgresql.service
systemctl disable beanstalkd.service
systemctl disable redis-server.service
systemctl disable memcached.service
