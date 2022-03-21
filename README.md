# senscritiquescraper

![Build Status](https://github.com/dbeley/senscritiquescraper/workflows/CI/badge.svg)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/e95f1fcf5d2e47b480a3ef9c98ce1b1d)]

Realisation à l'aide du framework Laravel d'un site de location et de critique (notation) de serie
(en cours d'elaboratio)

## Configurations nécessaires :

- Composer d'installer sur sa machine sinon pour l'installer voir : https://getcomposer.org/
- Un editeur de texte e-g : VS code
- Un Navigateur : Firefox, Chrome ... etc 

## Ajouts et Fonctionnalités (en cours de construction)

## A faire seulement si composer est bien installé !!!

```A partir du terminal (Linux et Mac) ou gitbash (Windows), suivre les instructions suivantes :
git clone https://github.com/O-S-K-19/Projet_Laravel_Site_Web_de_Serie.git

```Une fois le projet cloné, ouvrez avec votre editeur preferé et à partir d'un terminal vous vous placez dans le projet et lancez :
composer update

```Ensuite dans l'editeur vous allez ouvrir le fichier .env et modifier la ligne 13 : DB_DATABASE="/home/ousseini/Desktop/Projet_Laravel_Site_Web_de_Serie/database/database.sqlite" en replaçant par le chemin absolu par le votre permettant d'acceder au fichier database.sqlite situé dans database du dossier du projet.

```Puis vous allez toujours dans le terminal dans le projet faire :
php artisan make:migration --seed

``` Si tout Ok alors vous avez juste à faire :
php artisan serve

``` Vous connectez à http://localhost:8000/ pour voir le site web

## Difficultés 
- Pour l'insertion des données avec les seeders
-la gestion des commentaires 


Made by Ion & Ousseini


## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
