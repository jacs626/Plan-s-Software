Pasos para hacer andar el programa

1.- Clonar / Descargar el proyecto
2.- Descomprimirlo, renombrarlo y moverlo a la carpeta donde guardas tus proyectos
3.- Entrar desde la línea de comandos a la carpeta del proyecto y ejecutar: composer install, esto es necesario para que se instalen todas las librerías ya que estas no se suben a github.
4.- Crear tu propia base de datos
5.- Crear el archivo .env y en el configurar la conexión a tu base de datos
6.- Crear la clave de seguridad con el comando: php artisan key:generate
7.- Ejecutar el comando: php artisan migrate:install, para que se cree la tabla de las migraciones
8.- Ejecutar el comando php artisan migrate, para que se creen las tablas Categories y Products
9.- Ejecutar el comando: php artisan db:seed, para cargar los datos de prueba en las tablas correspondientes
10.- Hacer pruebas para verificar que todo funcione bien
