#!/bin/bash
set -e

CONTAINER=apache

echo "🔧 Criando pastas e ajustando permissões dentro do container $CONTAINER..."

docker exec -it $CONTAINER bash -lc "
  mkdir -p /var/www/html/e-prefeitura/writable &&
  chown -R www-data:www-data /var/www/html/e-prefeitura/writable &&
  chmod -R 775 /var/www/html/e-prefeitura/writable &&

  mkdir -p /var/www/html/e-prefeitura/vendor/mpdf/mpdf/tmp &&
  chown -R www-data:www-data /var/www/html/e-prefeitura/vendor/mpdf/mpdf/tmp &&
  chmod -R 775 /var/www/html/e-prefeitura/vendor/mpdf/mpdf/tmp &&

  mkdir -p /var/www/html/e-prefeitura/public/uploads/documentos &&
  chown -R www-data:www-data /var/www/html/e-prefeitura/public/uploads &&
  chmod -R 775 /var/www/html/e-prefeitura/public/uploads
"

echo "✅ Pastas criadas e permissões ajustadas."
