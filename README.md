![Build Status](https://github.com/dbeley/senscritiquescraper/workflows/CI/badge.svg)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/e95f1fcf5d2e47b480a3ef9c98ce1b1d)]

## Realisation à l'aide du framework Laravel d'un site de location et de critique (notation) de serie 
(en cours d'elaboration)

### Configurations nécessaires :

- Composer d'installer sur sa machine sinon pour l'installer voir : https://getcomposer.org/
- Un editeur de texte e-g : VS code
- Un Navigateur : Firefox, Chrome ... etc 

### Ajouts et Fonctionnalités 
(en cours de construction)

### A faire seulement si composer est bien installé !!!


```A partir du terminal (Linux et Mac) ou gitbash (Windows), suivre les instructions suivantes :
git clone https://github.com/O-S-K-19/Projet_Laravel_Site_Web_de_Serie.git

```Une fois le projet cloné, ouvrez avec votre editeur preferé et à partir d'un terminal vous vous placez dans le projet et lancez :
composer update

```Ensuite dans l'editeur vous allez ouvrir le fichier .env et modifier la ligne 13 : DB_DATABASE="/home/ousseini/Desktop/Projet_Laravel_Site_Web_de_Serie/database/database.sqlite" en replaçant par le chemin absolu (sous windows utilisez les doubles back slash : \\ ) par le votre permettant d'acceder au fichier database.sqlite situé dans database du dossier du projet.

```Puis vous allez toujours dans le terminal dans le projet faire :
php artisan migrate:refresh --seed

``` Si tout Ok alors vous avez juste à faire :
php artisan serve

``` Vous connectez à http://localhost:8000/ pour voir le site web

```

### Difficultés 
- Pour l'insertion des données avec les seeders
-la gestion des commentaires 


Made by Ion & Ousseini


