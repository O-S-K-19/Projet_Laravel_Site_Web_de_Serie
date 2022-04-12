![Build Status](https://github.com/dbeley/senscritiquescraper/workflows/CI/badge.svg)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/e95f1fcf5d2e47b480a3ef9c98ce1b1d)]

## Realisation à l'aide du framework Laravel d'un site de location et de critique (notation) de serie

### Configurations nécessaires :

-   Composer d'installer sur sa machine sinon pour l'installer voir : https://getcomposer.org/
-   Un editeur de texte e-g : VS code
-   Un Navigateur : Firefox, Chrome ... etc

### A faire seulement si composer est bien installé !!!

````A partir du terminal (Linux et Mac) ou gitbash (Windows), suivre les instructions suivantes :
git clone https://github.com/O-S-K-19/Projet_Laravel_Site_Web_de_Serie.git

```Une fois le projet cloné, ouvrez avec votre editeur preferé et à partir d'un terminal vous vous placez dans le projet et lancez :
composer update

```Ensuite dans l'editeur vous allez ouvrir le fichier .env et modifier la ligne 13 : DB_DATABASE="/home/ousseini/Desktop/Projet_Laravel_Site_Web_de_Serie/database/database.sqlite" en replaçant par le chemin absolu (sous windows utilisez les doubles back slash : \\ ) par le votre permettant d'acceder au fichier database.sqlite situé dans database du dossier du projet.

```Puis vous allez toujours dans le terminal dans le projet faire :
php artisan migrate:refresh --seed

``` Si tout Ok alors vous avez juste à faire :
php artisan serve

``` Vous connectez à http://localhost:8000/ pour voir le site web

````

### CRUD des séries améliorés

-   Nous avons mis en place un système amelioré d'authentification qui prevoit d'utiliser plusieurs rôles pour les utilisateurs du site :
    -   Subscriber : qui est un simple utilisateur du site. Il peut s'authentifier et avoir accès aux ressources du site pour les consulter et ajouter des commentaires. Mais il n'a pas le droit de modifier ou éditer une serie.
    -   Produceur : en plus du subscriber, il a les droits d'ajouter et/ou modifier des series du site qui lui appartient.
    -   Admin : qui a tous les droits pour la gestion et la modification du site.
        -   Il peut gérer (ajouter, mofier, supprimer) les series, les utilisateurs, les commentaires, les mails, les contatcs.

### Gestion des commentaires

-   Gestion de commentaires pour chaque vue. On a réussi d'ajouter les commentaires des utlisateurs dans la base de données et on peut ajouter nous même des commentaires pour qu'elle s'affiche sur la page de la série.

### Mise en place et utilisation de Laravel Jetstream

-   Nous avons utilisé l'extension Laravel JetStream pour gérer l'authentification et la catégorisation des utilisateurs.
-   Nous avons un espace fonctionnel (Administration) de l'administrateur qui sert comme un util pour gérer le bon fonctionnement du site.

### Ajout de fichiers média pour les séries

-   Nous avons developpé un util performant pour ajouter de nouvelles series sur le site. Les series vont être ajoutées directement sur le site et on aura un nouveau enregistrement dans la base de données. On peut changer tous les détail d'une série : titre, acteurs, producteur(s), image, video, description, catégorie, date de sortie.

### Identification en utilisant Socialite

-   Nous avons ajouté la possibilité de faire un "Login" en utilisan son compte google. Pour cela on a créé une application de développement Google et on l'a liée avec notre application. Les visitors qui utilise une authentification Google, par défaut on un rôle de subscriber qui est attribué.

### Difficultés

-   Pour l'insertion des données avec les seeders
    -la gestion des commentaires
-   On a eu des difficultés à utiliser git sur les deux machines. Donc nous avons travaillé sur des machines differentes et on a mis le code ensemble sur une machine et on faisait des "push's"
-   nous avons eu des difficultés avec le css car nous avons pas beaucoup d'experience à ajouter des styles.

Made by Ion & Ousseini
