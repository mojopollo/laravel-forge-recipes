systemctl disable mysql.service
systemctl disable postgresql.service
systemctl disable beanstalkd.service
systemctl disable redis-server.service
systemctl disable memcached.service

service mysql stop
service postgresql stop
service beanstalkd stop
service memcached stop
