<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel es un marco de aplicación web con una sintaxis elegante y expresiva. Creemos que el desarrollo debe ser una experiencia divertida y creativa para ser verdaderamente satisfactorio. Laravel elimina la molestia del desarrollo al facilitar las tareas comunes que se utilizan en muchos proyectos web, como:

- [Motor de enrutamiento sencillo y rápido](https://laravel.com/docs/routing).
- [Potente contenedor de inyección de dependencias](https://laravel.com/docs/container).
- Múltiples back-ends para el almacenamiento de [sesiones](https://laravel.com/docs/session) y    [caché](https://laravel.com/docs/cache).
- ORM de base de datos expresivo e intuitivo (https://laravel.com/docs/eloquent).
- Migraciones de esquema agnósticas a la base de datos (https://laravel.com/docs/migrations).
- Procesamiento robusto de trabajos en segundo plano (https://laravel.com/docs/queues).
- [Transmisión de eventos en tiempo real](https://laravel.com/docs/broadcasting).



## Learning Laravel

Laravel tiene la más extensa y completa [documentación](https://laravel.com/docs) y biblioteca de tutoriales en vídeo de todos los frameworks modernos de aplicaciones web, lo que hace que sea muy fácil empezar a usar el framework.

Si no tienes ganas de leer, [Laracasts](https://laracasts.com) puede ayudarte. Laracasts contiene más de 1500 tutoriales en vídeo sobre una serie de temas como Laravel, PHP moderno, pruebas unitarias y JavaScript. Aumente sus conocimientos profundizando en nuestra amplia biblioteca de vídeos.

## Laravel Sponsors

Nos gustaría extender nuestro agradecimiento a los siguientes patrocinadores por financiar el desarrollo de Laravel. Si estás interesado en convertirte en patrocinador, visita la página de Laravel [Patreon](https://patreon.com/taylorotwell).

### Premium Partners

-   **[Vehikl](https://vehikl.com/)**
-   **[Tighten Co.](https://tighten.co)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Cubet Techno Labs](https://cubettech.com)**
-   **[Cyber-Duck](https://cyber-duck.co.uk)**
-   **[Many](https://www.many.co.uk)**
-   **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
-   **[DevSquad](https://devsquad.com)**
-   **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
-   **[OP.GG](https://op.gg)**
-   **[CMS Max](https://www.cmsmax.com/)**
-   **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
-   **[Lendio](https://lendio.com)**
-   **[Romega Software](https://romegasoftware.com)**

## Contribuyendo

¡Gracias por considerar la posibilidad de contribuir al framework Laravel! La guía de contribución se puede encontrar en la [documentación de Laravel](https://laravel.com/docs/contributions).

## Código de conducta

Para asegurar que la comunidad Laravel es acogedora para todos, por favor revisa y cumple el [Código de Conducta](https://laravel.com/docs/contributions#code-of-conduct).

## Vulnerabilidades de seguridad

Si descubre una vulnerabilidad de seguridad en Laravel, por favor envíe un correo electrónico a Taylor Otwell a través de [taylor@laravel.com](mailto:taylor@laravel.com). Todas las vulnerabilidades de seguridad serán abordadas con prontitud.

## Licencia

El framework Laravel es un software de código abierto con licencia [MIT](https://opensource.org/licenses/MIT).






## Instalacion

Para poder iniciar este repositorio debe de contar con PHP 8 o mas.
adicionalemte de contar con composter y un paquete de servidor virtual tipo (XAMPP O WAMPSERVER)

### Instrucciones

Descarga el codigo fuente del siguiente enlace [Mediafire](https://www.mediafire.com/file/nkrag018or2sa4m/scss-sistema.zip/file).

Descomprima

1. en el archivo .env debe de escribir la base de datos que desea asignar Mysql
   ![Imagen 1](/imagen1.jpg)
2. al realizar el cambio esciba en la consola ya dentro del directorio de desarrollo

```
php artisan migrate
```

cuando ejecute el comando la base de datos quedaria cargada
3. al cargar la base de datos debe de ejecutar el servidor virtual artisan con el siguiente codigo

```

php artisan serve

```
al correr el codigo si no se a presentado un error la plataforma deberia estar cargada en su sistema

4. como es una fase temprana de desarrollo el sistema da la opcion de ingresar nuevo usuario
   esto se modificara de cara a la entrega del software ya que actualmente el usuario entra con maximos privilegios
