<?php
// Forge Recipe - Nginx - Set Real visitor ip address from Cloudflare (Enable)
// curl -sS "https://raw.githubusercontent.com/mojopollo/laravel-forge-recipes/master/nginx-set-real-visitor-ip-from-cloudflare-disable.php" | php

// Remove conf file from nginx
@unlink('/etc/nginx/conf.d/cloudflare-set-real-ip.conf');

// Restart nginx
`service nginx restart`;
