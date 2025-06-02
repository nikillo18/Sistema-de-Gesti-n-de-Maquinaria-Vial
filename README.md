1. Descargue el proyecto o clone el repositorio:

```bash
git clone [URL del repositorio]
```
2. Antes de ejecutar cualquier comando, dirigirse a la carpeta ap,
   que se encuentra en el directorio principal del proyecto
```bash
cd [/ruta/a/mi/proyecto/app/]
```
3. Copie el archivo .env.example y renómbrelo a .env:
```bash
 env.example 
```
4. Instale todas las dependencias del proyecto:
```bash
composer install
```
5. Configure la clave de la aplicación:
``` bash
php artisan key:generate --ansi
```
6. Instale las dependencias 
```bash
npm install
```
7. Ejecute las migraciones para configurar la base de datos:
```bash
php artisan migrate --seed
```
8.  Ejecutar los seeders
```bash
    php artisan  db:seed 
```
9. Ejecute el gestor de paquetes 

```bash
npm run dev
```
10. Inicie el servidor local:

```bash
php artisan serve
```
11. Visite la aplicación en el navegador:
```bash
http://127.0.0.1:8000
```


