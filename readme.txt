Primero hay que crear la base de datos en phpmyadmin llamada first-project

.env
config/database.php
- Colocamos aqui la conexion a la base de datos

php artisan make:migration create_categorias_table --create=categorias
php artisan make:migration create_opciones_table --create=opciones
php artisan migrate
- Comando que genera crear las tablas en la base de datos

database\migrations\2023_04_07_000736_create_categorias_table.php
- Es el archivo que crea la tabla categorias 

database\migrations\2023_04_07_000757_create_opciones_table.php
- Es el archivo que crea la tabla opciones

php artisan migrate
- Comando que genera crear las tablas en la base de datos

resources\views\welcome.blade.php
- Es la primer ventana que te tiene links hacia categorias y opciones

routes\web.php
- Es el archivo de rutas que 

app/Http/Controllers/CategoriaController.php
- Aqui se toman los datos del modelo de la tabla categorias y se inyectan en las vistas 

app/Http/Controllers/OpcionController.php
- Aqui se toman los datos del modelo de la tabla opciones y se inyectan en las vistas 

app\Models\Categoria.php
app\Models\Opcion.php
- Archivos que leen la informacion de la base de datos 

resources\views\layouts\app.blade.php
- Archivo que coloca cabeceras y plantilla de las vistas

resources/views/categorias/index.blade.php
resources/views/categorias/create.blade.php
resources/views/categorias/edit.blade.php
resources/views/categorias/show.blade.php
- Estos archivos son las vistas para listar, mostrar, editar, eliminar las categorias

resources/views/opciones/index.blade.php
resources/views/opciones/create.blade.php
resources/views/opciones/edit.blade.php
resources/views/opciones/show.blade.php
- Estos archivos son las vistas para listar, mostrar, editar, eliminar las opciones





