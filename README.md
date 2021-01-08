# TP1 (Blog)
## Par Alexis Szmundy
Modèle utilisé ( à la toute base ): https://startbootstrap.com/theme/clean-blog

Outils utilisés : Symfony, Bootstrap, Composer, WAMP

Nom de la BDD : tpweb

## Instructions
Installer Symfony ( cf. le cours )

Mettre tout le code dans un dossier dans le dossier www/ de WAMP

Exemple : ``` wamp64/www/TP1 ```

cd dans le dossier du serveur ( ici TP1 )

Lancer le serveur wamp avec la commande 

```$ php bin/console server:start``` 

Aller sur l'adresse ```localhost:8000``` avec votre navigateur préféré

Créer un premier utilisateur qui sera l'admin en cliquant sur "s'inscrire"

Aller dans phpmyadmin de wamp et aller dans la base de données "tpweb"

Aller dans la table User et éditer l'utilisateur créé

Ajouter "ROLE_ADMIN" à Roles pour en faire un admin

## Versions utilisées
PHP 7.4.9

phpmyadmin 5.0.2

Apache 2.4.46

MySQL 5.7.31
