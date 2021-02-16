# site_web_dynamique-JS-PHP-Bootstrap (FR)
un site web dynamique de e-commerce, que j'ai crée en utilisant JavaScript, PHP et le framework CSS Bootstrap 4.

-sous Windows-
1. installer WAMP server (facultatif): https://www.wampserver.com/
2. lancer WAMP server.
3. placer le contenu de ce projet, dans un dossier vide que vous allez créer.
4. placer le contenu du dossier que vous avez créé, dans le dossier "www" de WAMP.
5. clique gauche sur l'icone de WAMP dans la barre des taches, ensuite cliquez sur "phpMyAdmin" pour le lancer.
6. entrer le nom d'utilisateur "root" et rien pour le mot de passe.
7. une fois dans "phpMyAdmin", importer le fichier de la BD "mon_site_web_dynamique.sql".

-sous Linux-
1. placer le contenu de ce projet, dans un dossier vide que vous allez créer.
2. installer Apache, mySQL et phpMyAdmin (facultatif):
http://doc.ubuntu-fr.org/apache2
http://doc.ubuntu-fr.org/mysql
http://doc.ubuntu-fr.org/phpmyadmin
4. placer le contenu du dossier que vous avez créé, sous le répertoire "/var/www/html/" (répertoire racine du serveur HTTP Apache).
5. lancer phpMyAdmin dans votre navigateur web et entrer vos identifiants MySQL (nom d'utilisateur et mot de passe).
dans mon cas c'est "root" pour le nom d'utilisateur et encore "root" pour le mot de passe.

REMARQUE:
si vous avez des identifiants differents de "root" et "root", il faudra allez dans le fichier "database.php" et changer la valeur du champ "USER", ainsi que celle de "PASS":
define('USER','root');  //root: valeur du champ "USER" (entrez votre nom d'utilisateur MySQL)
define('PASS','root');  //root: valeur du champ "PASS" (entrez votre mot de passe MySQL)

7. une fois dans phpMyAdmin, importer le fichier de la base de données "my_database.sql":
créer une nouvelle base de données nommée "my_database.sql".
ensuite allez dans l'onglet "importer" et dans "fichier à importer", clickez sur "choisir un fichier" et choisir le fichier "my_database.sql". ensuite "exécuter".
Vous devriez voir un message de succès en vert, et à gauche la table "utilisateur" avec les données des utilisateurs déja inscrits.

REMARQUE: si vous choisisez de créer une base de données avec un nom différent de "my_database.sql". il faudra changer le nom de la base de données dans le fichier "database.php":
define('DB_NAME','mon_site_web_dynamique');   //mon_site_web_dynamique: valeur du champ "DB_NAME" (entrez le nom de votre base de données)

8. s'enregistrer sur le site:
allez vers la page d'inscription du site, vous verrez un formulaire d'inscription (Sign in form).
après avoir avoir rempli le formulaire d'inscription, vous verrez un message de succès s'afficher.
vous verrez aussi dans la BD, dans la table "utilisateur", un nouvel  utilisateur avec les identifiants que vous avez saisis lors de l'inscription.
félicitation! vous etes maintenant inscrit dans le site.

9. essayez maintenant de vous connectez sur la page de connection du site, avec vos identifiants.


have fun ;) en cas de soucis, n'hésitez pas à me posez vos questions dans l'onglet de discussions!

apercu 1: page d'accueil
![e_commerce_website-1](https://user-images.githubusercontent.com/72648203/108034118-55344a80-7035-11eb-8e79-1e9745bbcb2a.png)

apercu 2: page d'inscription
![e_commerce_website-2](https://user-images.githubusercontent.com/72648203/108034121-56fe0e00-7035-11eb-8747-6f215421f473.png)

apercu 3: page de connexion
![e_commerce_website-3](https://user-images.githubusercontent.com/72648203/108034124-5796a480-7035-11eb-8314-2f55c9f13431.png)

apercu 4: page de support
![e_commerce_website-4](https://user-images.githubusercontent.com/72648203/108034128-5796a480-7035-11eb-9864-63530f84ee78.png)

apercu 5: table "utilisateur" dans la BD
![e_commerce_website-5](https://user-images.githubusercontent.com/72648203/108111815-86446780-7095-11eb-8d26-7b59d0c286b9.png)
