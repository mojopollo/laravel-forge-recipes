# Laravel Forge Recipes

Just a small collection of recipes I need while trying out Forge.

#### System - Stop and Disable Services On Boot (MySQL  / Postgres / Beanstalkd / Redis / Memcached)
Will disable and stop services installed by Forge on provisioning but leave nginx alone.

Source Code: [bash](system-stop-and-disable-services-on-boot.sh)
```bash
curl -sS "https://raw.githubusercontent.com/mojopollo/laravel-forge-recipes/master/system-stop-and-disable-services-on-boot.sh" | sh
```

#### Nginx - Set Real visitor ip address from Cloudflare (Enable)
Will create a conf file ```/etc/nginx/conf.d/cloudflare-set-real-ip.conf```
with cloudflare's ip addresses and use the ```CF-Connecting-IP``` header to set the real ip address the restarts nginx.
If cloudflare updates their ip address, all that needs to be done is run this command again to update ip addresses.

Source Code: [php](nginx-set-real-visitor-ip-from-cloudflare-enable.php)
```bash
curl -sS "https://raw.githubusercontent.com/mojopollo/laravel-forge-recipes/master/nginx-set-real-visitor-ip-from-cloudflare-enable.php" | php
```

#### Nginx - Set Real visitor ip address from Cloudflare (Disable)
Removes ```/etc/nginx/conf.d/cloudflare-set-real-ip.conf``` and restarts nginx

Source Code: [php](nginx-set-real-visitor-ip-from-cloudflare-disable.php)
```bash
curl -sS "https://raw.githubusercontent.com/mojopollo/laravel-forge-recipes/master/nginx-set-real-visitor-ip-from-cloudflare-disable.php" | php
```
