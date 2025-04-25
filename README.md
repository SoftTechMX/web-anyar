<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Dependencias del Entorno de Desarollo

### 📦 Composer
Composer es un sistema de gestión de paquetes de PHP, instala la versión mas reciente de la pagina oficial que se muestra en el siguiente enlace [https://getcomposer.org/download/](https://getcomposer.org/download/)

### 🚀 NVM o Node JS 18
Se utiliza NPM para compilar los recursos del frontend y para trabajar de manera dinámica con los estilos CSS y con JS en tiempo real en la fase de desarrollo, para este proyecto se uso Node JS v18.20.1 y npm v10.8.1 puedes instalar la versión de Node Js 18 o puedes instalar NVM para gestionar múltiples versiones de Node. 

Descarga Node JS de la pagina oficial [https://nodejs.org/en/download](https://nodejs.org/en/download) o instala NVM.

### 📂 PHP 8.2, MySQL

Si estas usando entornos unix instala php mediante el comando

```bash
sudo apt install php8.2 php8.2-common php8.2-sqlite3 php8.2-xml php8.2-xdebug php8.2-zip php8.2-mbstring php8.2-gd php8.2-http php8.2-curl php8.2-mysql
```

si estas usando Windows pudes instalar XAMP el cual tiene todo lo necesario para desplegar servidores WEB para entornos de desarrollo, esta es la pagina ofical [https://www.apachefriends.org/es/download.html](https://www.apachefriends.org/es/download.html)


# Instrucciones para ejecutar en entorno de desarrollo *UNIX*
Puedes usar el script bash llamado *run.sh* que se encuentra en el directorio raiz del proyecto, por ejempo:

```bash
chmod +x run.sh
./run.sh
```
o puedes usar artisan y npm

```bash
php artisan serve
php artisan queue:work
npm run dev
```

La aplicación estará disponible en esta dirección [http://127.0.0.1:8000](http://127.0.0.1:8000)
