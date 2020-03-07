#!/bin/bash

cd /var/web/servohelper
git pull


cp -r * /var/www/html
rm /var/www/html/LICENSE
rm /var/www/html/package*
rm /var/www/html/*.sh
rm /var/www/html/*.md
rm /var/www/html/payload.php
rm /var/www/html/*.code-workspace
mkdir /var/www/html/servohelper
chown -R www-data:www-data /var/www/html/servohelper
ln -s /var/web/servohelper/payload.php /var/www/html/servohelper/payload.php
chown -R www-data:www-data /var/www/html/servohelper/payload.php




