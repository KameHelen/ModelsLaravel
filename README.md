<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

# ModelsLaravel

Proyecto de Laravel que demuestra relaciones muchos a muchos entre Alumnos y Materias.

## Estructura del Proyecto

- **Alumnos**: Tabla que contiene informaci¢n de los estudiantes
- **Materias**: Tabla que contiene las asignaturas disponibles
- **AlumnoMateria**: Tabla pivote que relaciona alumnos con materias (muchos a muchos)

## Instalaci¢n

1. Clonar el repositorio:
```bash
git clone https://github.com/tu-usuario/ModelsLaravel.git
cd ModelsLaravel
```
2. Instalar dependencias:
```bash
composer install
```
3. Configurar variables de entorno:
```bash
cp .env.example .env
php artisan key:generate
```
4. Configurar base de datos en .env:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=models_laravel
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contrase¤a
```
5. Ejecutar migraciones y seeders:
```bash
php artisan migrate
php artisan db:seed
```
## Uso

Ver datos en Tinker:
```bash
php artisan tinker
```
```bash
// Ver alumnos con sus materias
$alumno = App\Models\Alumno::with('materias')->first();
$alumno->materias;

// Ver materias con sus alumnos
$materia = App\Models\Materia::with('alumnos')->first();
$materia->alumnos;
```
