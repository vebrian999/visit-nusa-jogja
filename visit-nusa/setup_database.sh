#!/bin/bash

# Drop all tables and recreate
php artisan migrate:fresh

# Run the seeders
php artisan db:seed

echo "Database setup completed!"
