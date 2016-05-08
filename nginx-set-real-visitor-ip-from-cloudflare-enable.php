<?php
// Forge Recipe - Nginx - Set Real visitor ip address from Cloudflare (Enable)
// curl -sS "https://raw.githubusercontent.com/mojopollo/laravel-forge-recipes/master/nginx-set-real-visitor-ip-from-cloudflare-enable.php" | php

// Get cloudflare ip's
$ips = '';
$ips .= file_get_contents('https://www.cloudflare.com/ips-v4');
$ips .= file_get_contents('https://www.cloudflare.com/ips-v6');
$ips = explode("\n", $ips);

// Set nginx code block
$nginxCodeBlock = '';
foreach ($ips as $ip) {
    $nginxCodeBlock .= empty($ip) ? null : "set_real_ip_from {$ip};\n";
}
$nginxCodeBlock .= "\nreal_ip_header CF-Connecting-IP;\n";
$nginxCodeBlock .= "#real_ip_header X-Forwarded-For;\n";

// Dump code block to its own conf file
file_put_contents('/etc/nginx/conf.d/cloudflare-set-real-ip.conf', $nginxCodeBlock);

// Restart nginx
`service nginx restart`;
