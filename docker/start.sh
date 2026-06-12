#!/bin/bash
set -e

# Start services
echo "Starting Nginx..."
nginx

echo "Starting PHP-FPM..."
php-fpm

echo "Starting Queue Worker..."
php artisan queue:work --sleep=3 --tries=3 --max-time=3600 &

# Keep container running
echo "Container ready!"
tail -f /dev/null