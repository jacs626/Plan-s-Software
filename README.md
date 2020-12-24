Clonar / Descargar el proyecto
Descomprimirlo, renombrarlo y moverlo a la carpeta donde guardas tus proyectos
Entrar desde la línea de comandos a la carpeta del proyecto y ejecutar: composer install, esto es necesario para que se instalen todas las librerías ya que estas no se suben a github.
Crear tu propia base de datos
Crear el archivo .env y en el configurar la conexión a tu base de datos
Crear la clave de seguridad con el comando: php artisan key:generate
Ejecutar el comando: php artisan migrate:install, para que se cree la tabla de las migraciones
Ejecutar el comando php artisan migrate, para que se creen las tablas Categories y Products
Ejecutar el comando: php artisan db:seed, para cargar los datos de prueba en las tablas correspondientes
Hacer pruebas para verificar que todo funcione bien
