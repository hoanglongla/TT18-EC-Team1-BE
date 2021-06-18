php artisan cache:clear &&  php artisan ide-helper:generate
php artisan migrate:reset --force && php artisan migrate && php artisan db:seed
php artisan passport:install
php artisan passport:keys --force
