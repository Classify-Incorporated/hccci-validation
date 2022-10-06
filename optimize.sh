#!/bin/bash

echo "Cleaning in progress"
php artisan optimize
php artisan cache:clear
php artisan route:clear
php artisan view:clear
php artisan config:clear

echo "Tuning application performance"
php artisan optimize
php artisan config:cache
php artisan route:cache