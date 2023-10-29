#!/usr/bin/env bash

echo "Running composer"
composer global require hirak/prestissimo
composer install --no-dev --working-dir=/var/www/html

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

echo "Install Node.js and npm (specific version)..."
# Modify the URL to specify the desired Node.js version (e.g., 14.x)
curl -fsSL https://deb.nodesource.com/setup_20.5.0 | bash -
apt-get install -y nodejs

echo "Install yarn..."
yarn install

echo "Compress yarn build..."
yarn build

echo "Running migrations..."
php artisan migrate --force
