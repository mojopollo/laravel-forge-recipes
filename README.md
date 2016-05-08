# Laravel Forge Recipes

Just a small collection of recipes I need while trying out Forge.

#### Stop and Disable Services On Boot (MySQL  / Postgres / Beanstalkd / Redis / Memcached)
Will disable and stop services installed by Forge on provisioning but leave nginx alone.
```bash
curl -sS "https://gist.githubusercontent.com/mojopollo/5b1ba4e2790e948e4f691e082f1f8b57/raw" | sh
```

#### Nginx - Set Real visitor ip address from Cloudflare (Enable)
Will create a conf file ```/etc/nginx/conf.d/cloudflare-set-real-ip.conf```
with cloudflare's ip addresses and use the ```CF-Connecting-IP``` header to set the real ip address the restarts nginx.
If cloudflare updates their ip address, all that needs to be done is run this command again to update ip address.
```bash
curl -sS "https://gist.githubusercontent.com/mojopollo/5b1ba4e2790e948e4f691e082f1f8b57/raw" | sh
```

#### Nginx - Set Real visitor ip address from Cloudflare (Disable)
Removes ```/etc/nginx/conf.d/cloudflare-set-real-ip.conf``` and restarts nginx
```bash
curl -sS "https://gist.githubusercontent.com/mojopollo/5b1ba4e2790e948e4f691e082f1f8b57/raw" | sh
```
