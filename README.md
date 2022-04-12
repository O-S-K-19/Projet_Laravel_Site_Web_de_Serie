![Build
Status](https://github.com/dbeley/senscritiquescraper/workflows/CI/badge.svg)
[![Codacy
Badge](https://api.codacy.com/project/badge/Grade/e95f1fcf5d2e47b480a3ef9c98ce1b1d)
]
## Réalisation à l'aide du framework Laravel d'un site de location et de critique
(notation) de série
### Configurations nécessaires :
- Composer d'installer sur sa machine sinon pour l'installer voir :
https://getcomposer.org/
- Un éditeur de texte e-g : VS code
- Un Navigateur : Firefox, Chrome ... etc
### A faire seulement si composer est bien installé !!!
````A partir du terminal (Linux et Mac) ou gitbash (Windows), suivre les
instructions suivantes :
git clone https://github.com/O-S-K-19/Projet_Laravel_Site_Web_de_Serie.git
```Une fois le projet cloné, ouvrez avec votre éditeur préféré et à partir d'un
terminal vous vous placez dans le projet et lancez :
composer update
```Ensuite dans l'éditeur vous allez ouvrir le fichier .env et modifier la ligne 13
:
DB_DATABASE="/home/ousseini/Desktop/Projet_Laravel_Site_Web_de_Serie/database/datab
ase.sqlite" en replaçant par le chemin absolu (sous windows utilisez les doubles
back slash : \\ ) par le votre permettant d'accéder au fichier database.sqlite
situé dans database du dossier du projet.
```Puis vous allez toujours dans le terminal dans le projet faire :
php artisan migrate:refresh --seed
``` Si tout Ok alors vous avez juste à faire :
php artisan serve
``` Vous connectez à http://localhost:8000/ pour voir le site web
````
## Les données s'ajoute automatique apres avoir fait le migrate et le seed :
## Pour faire des tests :
### Pour ce connecter en tant qu'Admin
- EMAIL : admin@admin.com
- Password : admin
### Pour ce connecter en tant que Producteur-Realisateur
- EMAIL : producer@producer.com
- Password : producer
### Pour ce connecter en tant que Abonés
- EMAIL : subscriber@subscriber.com
- Password : subscriber

## Extensions et autres surprises
### Gestion d'un fichier de contact
- Nous avons ajouté un fichier de contact pour les utilisateurs du site. Les
messages sont stockés dans la base de données et affichés dans la section de
l'administrateur.
### Tinker
- Permet de faire des requêtes sur notre base de données depuis la ligne de
commande.
### CRUD des séries améliorés
- Nous avons mis en place un système amélioré d'authentification qui prévoit
d'utiliser plusieurs rôles pour les utilisateurs du site :
- Abonnés : qui est un simple utilisateur du site. Il peut s'authentifier et
avoir accès aux ressources du site pour les consulter et ajouter des commentaires.
Mais il n'a pas le droit de modifier ou d'éditer une série.
- Producteur/Réalisateur : en plus du subscriber, il a les droits d'ajouter
et/ou modifier des séries du site qui lui appartient.
- Administrateur : qui a tous les droits pour la gestion et la modification du
site.
- Il peut gérer (ajouter, modifier, supprimer) les séries, les
utilisateurs, les commentaires, les mails, les contacts.
### Gestion des commentaires
- Gestion de commentaires pour chaque vue. On a réussi à ajouter les commentaires
des utilisateurs dans la base de données et on peut ajouter nous même des
commentaires pour qu'elle s'affiche sur la page de la série.
### Mise en place et utilisation de Laravel Jetstream
- Nous avons utilisé l'extension Laravel JetStream pour gérer l'authentification
et la catégorisation des utilisateurs.
- Nous avons un espace fonctionnel (Administration) de l'administrateur qui sert
comme un outil pour gérer le bon fonctionnement du site.
### Ajout de fichiers média pour les séries
- Nous avons développé un outil performant pour ajouter de nouvelles séries sur
le site. Les séries vont être ajoutées directement sur le site et on aura un nouvel
enregistrement dans la base de données. On peut changer tous les détails d'une
série : titre, acteurs, producteur(s), image, vidéo, description, catégorie, date
de sortie.
### Une table Favorites pour sauvegarder les séries préférées des utilisateurs
- S'affiche les séries qu'il a choisies comme favorites. Le bouton depuis la page
"Séries". Après on peut voir notre série favorite dans le tableau de la page
Favorites ()".
NOTE : Nous n'avons pas géré le cas où l'utilisateur appuie plusieurs fois sur
le bouton "add favorite" d'une série.
### Identification en utilisant Socialite
- Nous avons ajouté la possibilité de faire un "Login" en utilisant son compte
google. Pour cela on a créé une application de développement Google et on l'a liée
avec notre application. Les visiteurs qui utilisent une authentification Google,
par défaut on un rôle de subscriber qui est attribué.
### extraction des données sur le site de sens critique
## Difficultés
- Pour l'insertion des données avec les seeders
-la gestion des commentaires
- On a eu des difficultés à mettre en place le git sur les deux machines. Donc
nous avons travaillé sur des machines différentes et on a mis le code ensemble sur
une machine et on faisait des "push's"
- nous avons eu des difficultés avec le css car nous avons pas beaucoup
d'expérience à ajouter des styles pour différents éléments du code.
- Nous sommes désolés de faire le dernier commit si tard. Nous avons eu un
problème de commit. La dernière journée, on a fait des modifications chacun de son
côté et on a eu un conflit qu'il a fallu gérer.
Merci pour votre attention accordée à notre projet Site Series!
Made by Ion & Ousseini
## Les sources utilisés
- Traversy Media https://www.youtube.com/c/TraversyMedia
- https://www.youtube.com/c/NordCoders
- Laravel https://laravel.com/docs/master/ 
- PHP https://www.php.net/
- 
