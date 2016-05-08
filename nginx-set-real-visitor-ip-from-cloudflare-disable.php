<?php
// Forge Recipe - Nginx - Set Real visitor ip address from Cloudflare (Enable)
// curl -sS "https://gist.githubusercontent.com/mojopollo/5b1ba4e2790e948e4f691e082f1f8b57/raw" | php

// Remove conf file from nginx
@unlink('/etc/nginx/conf.d/cloudflare-set-real-ip.conf');

// Restart nginx
`service nginx restart`;
