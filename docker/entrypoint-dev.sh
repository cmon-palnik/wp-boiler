#!/bin/bash
cp /run/secrets/id_rsa ~/.ssh/
chmod 700 ~/.ssh/
chmod 600 ~/.ssh/id_rsa
ssh-agent sh -c 'ssh-add ~/.ssh/id_rsa; composer install --no-interaction --optimize-autoloader'

php-fpm