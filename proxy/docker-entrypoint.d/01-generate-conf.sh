#!/bin/sh
#sites-enabledからsites-availableへのシンボリックリンクを張るスクリプト

mkdir /etc/nginx/sites-enabled/
ln -s /etc/nginx/sites-available/idp.example.com /etc/nginx/sites-enabled/idp.example.com
ln -s /etc/nginx/sites-available/sp.example.org /etc/nginx/sites-enabled/sp.example.org