[ -f /etc/nginx/conf.d/cloudflare-set-real-ip.conf ] \
&& rm /etc/nginx/conf.d/cloudflare-set-real-ip.conf \
&& service nginx restart
