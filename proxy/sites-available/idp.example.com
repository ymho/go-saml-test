server {
    listen 80;
    server_name idp.example.com;
    return 301 https://$host$request_uri;
}

server {
    listen 443 ssl;
    charset utf-8;
    server_name idp.example.com;
    ssl_certificate /etc/nginx/cert/idp.example.com.crt;
    ssl_certificate_key /etc/nginx/cert/idp.example.com.pem;
    location / {
        proxy_pass http://idp:80;
        #             proxy_redirect http:// https://;
        proxy_set_header Host $http_host;
        proxy_set_header X-Real-IP $remote_addr;
        proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
        proxy_set_header X-CSRF-Token $http_x_csrf_token;
        proxy_set_header X-Forwarded-Proto $scheme;
        proxy_set_header X-Forwarded-Server $host;
        proxy_set_header X-Forwarded-Host $host;
    }
    access_log /var/log/nginx/access.log;
    error_log /var/log/nginx/error.log;
}