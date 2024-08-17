#!/bin/bash
set -eux
cd /var/www/html/

wp core is-installed --allow-root || wp core install --allow-root --url=localhost --title=WPBoiler \
        --admin_user=admin --admin_password=strongpassword --admin_email=info@example.com

chown -R www-data:www-data /var/www/html
chmod -R g+w /var/www/html

exec "$@"
