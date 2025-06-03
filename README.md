# 🛣️ Sistema de Gestión Vial

Una aplicación web para administrar maquinarias viales, obras, asignaciones, mantenimientos y reportes mensuales por provincia.

---

## 🚀 Funcionalidades

- 🔐 **Autenticación de usuarios** (login y registro).
- 🚜 **Gestión de maquinarias**: altas, bajas, historial y límites de uso.
- 🏗️ **Gestión de obras**: CRUD completo y asignación de maquinarias.
- 🛠️ **Mantenimientos**: creación y seguimiento por máquina.
- 📄 **Reportes PDF**: resumen mensual de obras por provincia.
- 📬 **Envío de correos** mediante Mailtrap o SMTP (Gmail).

---

## 🛠️ Tecnologías

- **Backend:** Laravel 10 (PHP 8.1+)
- **Frontend:** Blade + Tailwind CSS
- **Base de datos:** MySQL
- **Autenticación:** Laravel Breeze
- **PDFs:** DomPDF 
- **Emails:** SMTP (Gmail o Mailtrap)
---

## 📦 Instalación


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
4. Copiar y modificar en el archivo .env 
```bash
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=vf0374018@gmail.com
MAIL_PASSWORD=svxtlkifppipgnem
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=Sistemavial@gmail.com
MAIL_FROM_NAME="${Sistema Vial}"
```
5. Instale todas las dependencias del proyecto:
```bash
composer install
```
6. Configure la clave de la aplicación:
``` bash
php artisan key:generate --ansi
```
7. Instale las dependencias 
```bash
npm install
```
8. Ejecute las migraciones para configurar la base de datos:
```bash
php artisan migrate 
```
9.  Ejecutar los seeders
```bash
    php artisan  db:seed 
```
10. Ejecute el gestor de paquetes 

```bash
npm run dev
```
11. Inicie el servidor local:

```bash
php artisan serve
```
12. Visite la aplicación en el navegador:
```bash
http://127.0.0.1:8000
```


