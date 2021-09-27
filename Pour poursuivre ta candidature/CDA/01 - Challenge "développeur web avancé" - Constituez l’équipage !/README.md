# Challenge d'admission Concepteur d'Application

- Créer une application web simple dans votre langage de prédilection.
- Stocker les données de cette application dans une base de données.
- L'application ne comportera qu'une seule page.

## Contraintes niveau technique :

- Possibiliter d'utiliser n'importe quel système de base de données : SQL (MySQL, PostgreSQL, etc.), NoSQL (MongoDB, etc.), voire Firebase (ou toute autre base de données "serverless")
- Possibiliter d'utiliser n'importe quel langage, bibliothèque, framework, voire combinaison de plusieurs technologies : cela peut être le cas si vous travaillez avec une bibliothèque ou un framework front-end tel que React ou Angular, et que vous écrivez par ailleurs une application back-end.
- Possibiliter de publier votre travail sur un dépôt GitHub, voire déployer votre application (sur Heroku, Netlify, votre propre serveur, etc.). A défaut de déployer l'application, il faudra préparer une petite démo fonctionnelle sur votre ordinateur, et avoir le code source à portée de main, en vue de l'entretien technique avec un formateur.

## Prérequis:

- Php v^7.4
- Yarn v^1.22
- Composer v^2

## Installation
1 : Cloner le repository : 	        
https://github.com/arnaudpilato/challenge_CDA.git

2 : Création du fichier .env.local à la racine du projet, puis ajouter dans ce fichier la ligne suivante:

DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/db_name
(à compléter avec vos infos)

3 : Composer install :
Une fois composer installé, lancez dans votre terminal à la racine du projet “composer install” pour installer les
librairies requises pour faire fonctionner le projet.

4 : yarn install :
Une fois Yarn installé, lancez dans votre terminal à la racine du projet
“yarn install” pour installer les fichiers requis pour faire fonctionner le projet.

5 : symfony console doctrine:database:create :
Une fois que vous avez rempli le fichier env.local, lancez dans votre terminal à la racine du projet
“symfony console doctrine:database:create” en y entrant le nom que vous avez choisi pour votre base de donnée qui se
trouve dans le env.local.

6 : symfony console doctrine:migrations:migrate :
Une fois que la base de donnée est créée, lancez dans votre terminal à la racine du projet
“symfony console doctrine:migrations:migrate” pour remplir la base de données de ses tables.

7 : symfony console doctrine:fixtures:load :
une fois que les migrations sont faites, lancez dans votre terminal à la racine du projet
"symfony console doctrine:fixtures:load" pour remplir les tables de données.

8 : yarn encore dev :
lancez dans votre terminal à la racine du projet “yarn encore dev” pour mettre
à jour votre build et les fichiers de style, ainsi que les images du projet.

9 : symfony server:start :
enfin, lancez “symfony server:start” pour ouvrir votre localhost dans votre
navigateur.

## Contact :

Arnaud Pilato : https://github.com/arnaudpilato
