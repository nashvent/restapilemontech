# Lemontech rest api
## Instrucciones para ejecutar
1. Clonar el proyecto
```
git clone https://github.com/nashvent/restapilemontech.git
```
2. Importar la base de datos
```
cat data/project.sql | sqlite3 db.sqlite3
```
3. Cargar los archivos usando composer
```
composer dump-autoload
```
4. Ejecutar proyecto
```
php -S localhost:3000 -t public
```