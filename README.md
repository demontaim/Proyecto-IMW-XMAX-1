# Proyecto de Laravel de IMW

Hola, este es un proyecto de Laravel que he creado para la clase de Implantación de Aplicaciones Web.

El modelo trata de un Hotel llamado Hotel Emperador que tiene una serie de Habitaciones que tienen una categoría.

El hotel tiene una serie de **clientes** que pueden realizar **valoraciones** a las **habitaciones** que posee el hotel.


## Modelos Utilizados

|    Modelos   |   Descripción   |
|--------------|:---------------:|
| Habitación  | Registro de habitaciones del hotel con su id, nombre, categoría.   |
| Categoría  | Categoría que clasifica las habitaciones.     |
| Cliente | Usuarios del sistema  |
| Opinión | Opiniones generadas por los usuarios. Cada usuario tiene su propia opinión.  |
| Evento  | Eventos del hotel que funcionan con FullCalendar. |


## Link al Proyecto de Gitpod

[Proyecto de Gitpod](https://gitpod.io#snapshot/e02199a0-093e-445f-8200-a225b5ab9193)



## Comandos Útiles

_**Comandos Útiles**_

>Poner la aplicación en funcionamiento en local:
```console
callmeaday@heaven:~$ php -S 0.0.0.0:8000 -t public
```
<br>

>Borrar la base de datos y volver a crearla:
```console
callmeaday@heaven:~$ php artisan migrate:fresh
```
<br>

>Generar datos de prueba con Tinker:
```console
callmeaday@heaven:~$ php artisan tinker
```
```console
>>> App\Models\Product::factory()->make();
```
<br>

>Insertar datos en la base de datos con Tinker:
```console
callmeaday@heaven:~$ php artisan tinker
```
```console
>>> App\Models\Product::factory()->create();
```
<br>

>El seeder también se puede ejecutar usando en la terminal el siguiente comando:
```console
callmeaday@heaven:~$ php artisan db:seed
```
<br>

>Instalación de Autentificación en Laravel
1. Primero ejecutamos el siguiente comando en la terminal:
```console
callmeaday@heaven:~$ composer laravel/ui
```
2. Seguidamente ejecutamos este comando:
```console
callmeaday@heaven:~$ php artisan ui bootstrap --auth
```
<br>

>Instalar en Frontend en nuestro proyecto Laravel con npm:
1. Si queremos ver la versión de npm que tenemos ejecutamos:
```console
callmeaday@heaven:~$ npm --version
```
2. Si queremos instalar las dependencias de npm ejecutamos:
```console
callmeaday@heaven:~$ npm install
```
3. Para realizar la compilación ejecutamos:
```console
callmeaday@heaven:~$ npm run dev
```
<br>

>Para poder ejecutar el proyecto con normalidad es preciso que nos logueemos:
1. Podemos acceder a la creación de un usuario.
2. Luego podremos usar la aplicación con total normalidad sin restricciones.
<br>

>Creación de Requests en Laravel para los formularios:
```console
callmeaday@heaven:~$ php artisan make:request ProductRequest
```
<br>

>Generación de multiples componentes con Artisan:
```console
callmeaday@heaven:~$ php artisan make:model Modelo -a
```

<br>

>Para el envio de correos con Laravel:
En este servidor tengo configurado el envío de correos con un smtp llamado [MailTrap.io](https://mailtrap.io/).

Con crearos una cuenta y poner vuestras credenciales en el archivo **.env** será suficiente para que el servidor esté a vuestra disposición en modo desarrollo.

<br>

>Generación de PDF's con Laravel:
Estuve prácticando con eso anoche y cuando estaba implementandolo corrompe el metodo show. Al pedirle una ruta /categoria/pdf se cree que es un nombre o un id entra en conflicto.

También aparte de este proyecto realicé uno de una Tienda de Videojuegos en el que tenía implementado el carrito de compra incluso pero paré por la cantidad de errores que me estaba arrojando. También estás navidades estuve practicando con Jetstream y tengo ganas ya de empezar con Wordpress para ver que podemos sacar de provecho de esto.


