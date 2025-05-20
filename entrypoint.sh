set -e

echo "Instalando dependencias PHP (Composer)…"
composer install --prefer-dist --no-interaction --optimize-autoloader

echo "Esperando a que la base de datos esté lista en ${DB_HOST}:${DB_PORT:-3306}…"
until nc -z "${DB_HOST}" "${DB_PORT:-3306}"; do
  echo "Esperando DB…"
  sleep 1
done

echo "Ejecutando migraciones y seeders…"

php artisan migrate:fresh --seed

echo "Arranque completado, lanzando comando: $@"
exec "$@"
