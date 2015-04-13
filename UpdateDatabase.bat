call init.bat
php app/console doctrine:schema:update --dump-sql
php app/console doctrine:schema:update --force
pause